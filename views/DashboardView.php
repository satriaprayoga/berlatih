<?php

/**
 * 
 */
 class DashboardView extends View{
 	
	public function __construct(){
		parent::__construct();
	}
	
	public function configureTemplate($temp_files) {
		$temp_files['body']=SITE_PATH.'views/admin/dashboard.php';
		foreach ($temp_files as $key=>$value) {
			$this->parse($value);
		}
	}
	
 }
