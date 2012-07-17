<?php
   
   class AdminModel extends Model{
   		
		public function auth($username,$password){
			$crypt=md5($password);
			if((strcmp(admin_username, $username)==0) && (strcmp(admin_passwd, $crypt)==0)){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	
   }
