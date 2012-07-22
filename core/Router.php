<?php

/**
 * Description of Router
 *
 * @author satriaprayoga
 */
class Router {

    private function __construct() {
        
    }

    public static function route(Request $request) {
        $controllerName = $request->getController();
        $methodName = $request->getMethods();
        $args = $request->getArgs();
        $file = SITE_PATH . 'controllers/' . $controllerName . '.php';
        if (file_exists($file)) {
            require $file;
            $controllerClass = $controllerName;
            $controller = new $controllerClass();
            $method = (is_callable(array($controller, $methodName))) ? $methodName : Router::error();
            if (!empty($args)) {
                call_user_func_array(array($controller, $method), $args);
            } else {
                call_user_func(array($controller, $method));
            }
            return;
        } else {
            Router::error();
        }
    }

    function __clone() {
        trigger_error("__CLASS__ is uncloneable");
    }

    public static function error() {
        require SITE_PATH . 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }

}
