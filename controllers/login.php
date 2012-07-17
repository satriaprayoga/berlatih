<?php
    class Login extends Controller{
    	
		public function __construct(){
			
		}
    	
		public function index(){
			echo 'Login here';
		}
		
		public function auth(){
			$username=$_POST['usr'];
			$password=$_POST['passwd'];
			$valid=$this->load->model('user')->auth($username,$password);
			if($valid){
				header('location: ../dashboard.php');
			}else{
				header('location: ../login.php');
			}
		}
		
		
    }
