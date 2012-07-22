<?php

/**
 * Base controller class
 *
 * @author satriaprayoga
 */
abstract class Controller {
    
    protected $view;
    protected $model;

    public function __construct() {
        $this->view=new View();
    }

    public function loadModel($name) {
        $model_path = 'models/' . $name . 'Model.php';
        if (file_exists($model_path)) {
            require 'models/' . $name . 'Model.php';
            $modelClass = $name . 'Model';
            $this->model = new $modelClass();
        }
    }

    public abstract function index();
}

