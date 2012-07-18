<?php

class Controller {
  
    protected $model;

    public function __construct() {
      
        $this->view=new View();
    }

    public function index() {
        
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