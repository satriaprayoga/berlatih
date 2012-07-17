<?php
    
    class Test extends Controller{
    	
		public function __construct(){
			echo 'call from router<br/>';
		}
		
		public function index(){
			echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		}
		
		public function find($var=''){
			echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
			echo '<pre>'.print_r(func_get_args(),1).'</pre>';		
		}
		
    	
    }
