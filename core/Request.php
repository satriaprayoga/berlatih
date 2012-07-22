<?php

/**
 * Request wrapper class
 *
 * @author satriaprayoga
 */
class Request {

    private $controller;
    private $methods;
    private $args;

    public function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        $url = trim($url, '/');
        $url=  filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        $this->controller = (empty($url[0])) ? DEFAULT_HOME : $url[0];
        $this->methods = (empty($url[1])) ? 'index' : $url[1];
        $part = array_slice($url, 2);
        $this->args = empty($part) ? array() : $part;
    }
    
    public function getController() {
        return $this->controller;
    }

    public function getMethods() {
        return $this->methods;
    }

    public function getArgs() {
        return $this->args;
    }



}
