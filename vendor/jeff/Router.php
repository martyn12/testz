<?php

namespace core;

class Router
{
    static function route()
    {
        $controller = 'Main';
        $action = 'index';
        $routeParam = null;

        $route = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($route[1])) {
            $controller = $route[1];
        }

        if (!empty($route[2])) {
            $action = $route[2];
        }

        if (!empty($route[3])) {
            $routeParam = $route[3];
        }
        return [
            'controller' => $controller,
            'action' => $action,
            'routeParam' => $routeParam,
        ];
    }

    static function start()
    {
        $route = Router::route();

        $controller = 'app\controllers\\' . ucfirst($route['controller']) . 'Controller';
        $action = $route['action'];
        $routeParam = $route['routeParam'];

        if (class_exists($controller)) {
            $controllerObject = new $controller;
        } else {
            Router::goTo404();
            throw new \Exception("Не удалось найти контроллер {$controller}");
        }

        if (method_exists($controller, $action)) {
            $controllerObject->$action($routeParam);
        } else {
            Router::goTo404();
            throw new \Exception("Не удалось найти метод {$controller}::{$action}");
        }

    }

    static function goTo404()
    {
        header('Location: /main/error');
        exit();
    }
}