<?php

class Controller {

    protected $_registry;
    protected $load;
    protected $model;

    public function __construct() {
        $this->_registry = Registry::getInstance();
        $this->load = new Loader();
    }

    public function index() {
        
    }

    final public function __get($key) {
        if ($return == $this->_registry->$key) {
            return $return;
        }
        return false;
    }

    public function loadModel($name) {
        $model_path = 'models/' . $name . 'Model.php';
        if (file_exists($model_path)) {
            require 'models/' . $name . 'Model.php';
            $modelClass = $name . 'Model';
            $this->model = new $modelClass();
        }
    }

}