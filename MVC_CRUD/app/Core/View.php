<?php

class View
{
    public static function load(string $viewName, array $viewData = [])
    {
        $file = VIEWS . $viewName . '.php';
        if(file_exists($file)){

            extract($viewData);
    
            ob_start();
            require_once $file;
            ob_end_flush();
        }
        else{
            echo 'this view: '.$viewName.' doesn\'t exist.';
        }

    }
}
