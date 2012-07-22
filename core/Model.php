<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Model class
 *
 * @author satriaprayoga
 */
class Model {
    
    public function __construct() {
        $this->db=new DbUtil(DB_TYPE, DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    }
}
