<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';

        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {

        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {

            if (preg_match("~$uriPattern~", $uri)) {
                try {
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                    $segments = explode('/', $internalRoute);

                    $controllerName = ucfirst(array_shift($segments) . 'Controller');

                    $actionName = 'action' . ucfirst(array_shift($segments));

                    $parameters = $segments;

                    $controllerFile = ROOT . '/controllers/' .  $controllerName . '.php';

                    if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                    };

                    $controllerObject = new $controllerName;
                    
                    ini_set('display_errors','Off');
                   
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                  
                    ini_set('display_errors','On');

                    if ($result != null) {
                        break;
                    }else{
                        throw new Exception('проблемы с загрузкой страницы');
                    }
                } catch (Exception $e) {
                    $result = call_user_func_array(array(new HttpException, 'actionIndex'), array($e));
                    break;
                }
            }
        }
    }
}
