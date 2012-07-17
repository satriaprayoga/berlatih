<?php

class AdminModel extends Model {
    
    function __construct(){
        parent::__construct();
    }

    public function auth($username, $password) {
        $crypt = md5($password);
        if ((strcmp(admin_username, $username) == 0) && (strcmp(admin_passwd, $crypt) == 0)) {
            return true;
        } else {
            return false;
        }
    }

}
