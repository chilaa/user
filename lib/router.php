<?php

function router($method, $url, $action)
{
//    echo 'route';

    if (strpos($url, '{') == !false) {
        if (isset($_SERVER['PATH_INFO'])) {


            $actions = explode('/', $url);
            $paths = explode('/', $_SERVER['PATH_INFO']);
            $act = $actions[1];
            $id = $paths[2];
//        print_r($act);
            $path = $paths[1];
            if ($act == $path) {
                $action = explode('@', $action);
                $controller = $action[0];
                $function = $action[1];
                require_once "controller/$controller.php";
                $function($id);
            }
        }
    } else {
        if (check($method, $url)) {
            $action = explode('@', $action);
            $controller = $action[0];
            $function = $action[1];
            require_once "controller/$controller.php";
//            echo "router done $function  $controller";
            $function();
        }
    }


}

function check($method, $request)
{
    if (!(isset($_SERVER['REQUEST_METHOD']) && $method == $_SERVER['REQUEST_METHOD'])) {
        return false;
    }
    if (!(isset($_SERVER['PATH_INFO']) && $request == $_SERVER['PATH_INFO'])) {
        return false;
    }

    return true;
}

