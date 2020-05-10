<?php

class HttpException
{

    public function actionIndex($e)
    {
        require_once(ROOT . '/views/exeption/index.php');
        
        return true;
    }  
}

 