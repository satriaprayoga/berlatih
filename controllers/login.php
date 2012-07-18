<?php

class Login extends Controller {

    public function __construct() {
        parent::__construct();
   
        $this->loadModel('Admin');
    }

    public function index() {
        $this->view->render('admin/login');
    }

    public function auth() {
        $username = htmlspecialchars($_POST['usr']);
        $password = htmlspecialchars($_POST['passwd']);
        $valid = $this->model->auth($username, $password);
        if ($valid) {
            Session::init();
            Session::set('authenticated', true);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
    }

}
