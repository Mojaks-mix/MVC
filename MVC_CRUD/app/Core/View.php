<?php

namespace App\Core;

use Smarty;

class View extends Smarty
{
    public function __construct(){
        parent::__construct();
        $this->setTemplateDir(SMARTY_ENGINE . 'templates');
        $this->setConfigDir(SMARTY_ENGINE . 'configs');
        $this->setCompileDir(SMARTY_ENGINE . 'templates_c');
        $this->setCacheDir(SMARTY_ENGINE . 'cache');
        $this->registerPlugin('function', 'plugin_url', 'smarty_function_plugin_url');
        //$smarty->testInstall();
        //$smarty->display('Views\home.tpl');
    }

    public static function load(string $viewName, array $viewData = [])
    {
        $view = new View();
        return $view->render($viewName, $viewData);

    }

    public function render(string $viewName, array $viewData = []){
        $file = SMARTY_ENGINE . 'templates\\Views\\' . $viewName . '.tpl';
        if(file_exists($file)){
            $this->assign("data",$viewData);

            $this->display($file);
        }
        else{
            echo 'this view: '.$viewName.' doesn\'t exist.';
        }
    }
}
