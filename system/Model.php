<?php
    
    abstract class Model{
    	
		function __construct(){
			$this->db=new Database();
		}
		
    }
