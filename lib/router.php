<?php

function router($method, $url, $action)
{

    if (strpos($url, '{') == !false) {
        if (isset($_SERVER['PATH_INFO'])) {

        }
        $actions = explode('/', $url);
        $paths = explode('/', $_SERVER['PATH_INFO']);
        print_r($actions);
        print_r($paths);
    } else {
        if (check($method, $url)) {
            $action = explode('@', $action);
            $controller = $action[0];
            $function = $action[1];
            require_once "controller/$controller.php";
//            echo "routrer done $function  $controller";
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

