<?php

class SiteController
{

    public function actionIndex()
    {

        if (file_exists(ROOT . '/views/site/index.php')) {
            require_once(ROOT . '/views/site/index.php');
            return true;
        } else {
            return false;
        }
    }

    public function actionAbout()
    {
        if (file_exists(ROOT . '/views/site/about.php')) {
            require_once(ROOT . '/views/site/about.php');
            return true;
        } else {
            return false;
        }
    }
    public function actionExeption()
    {  
            return false;
    }
}
