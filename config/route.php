<?php

/**
 * Class Routing
 * URL {site}/{controller}/{action}/[get request]
 */
class Routing {

    public static function buildRoute() {

        /*Default controller $ action*/
        $controllerName = 'IndexController';
        $modelName = 'IndexModel';
        $action = 'index';

        $route = explode('/',$_SERVER['REQUEST_URI']);

        /*Define the Controller*/
        if($route[1] != ''){
            $controllerName = ucfirst($route[1].'Controller');
            $modelName = ucfirst($route[1].'Model');
        }
        /*Load Controller*/
        include(CONTROLLER_PATH.$controllerName.'.php');
        include(MODEL_PATH.$modelName.'.php');

        /*Define the Action*/
        if(isset($route[2]) && !empty($route[2])){
            $action = $route[2];
        }

        /*Load action from controller*/
        $controller = new $controllerName();
        $controller->$action();
    }

    public function errorPage() {

    }
}