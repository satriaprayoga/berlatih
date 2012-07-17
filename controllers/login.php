<?php

class Login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel('Admin');
    }

    public function index() {
        $this->load->view('Login');
    }

    public function auth() {
        $username = htmlspecialchars($_POST['usr']);
        $password = $_POST['passwd'];
        $valid=$this->model->auth($username, $password);
        if($valid){
            header('location: ../dashboard');
        }else{
            echo 'invalid';
        }
    }

}
