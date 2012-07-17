<?php
    
    /**
	 * 
	 */
    class Home extends Controller{
    	
		public function __construct(){
			parent::__construct();
			
		}
		
		public function index(){
			$var['page_title']="Hallo";
			$var['content']="ini content";
			$var['end_page']="End of Page";
			$this->load->view('Home',$var);
		}
		
		public function dump($var=array()){
			echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
			echo '<pre>'.print_r(func_get_args(),1).'</pre>';	
		}
    }
