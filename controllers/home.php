<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author satriaprayoga
 */
class Home extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        echo 'This is home';
    }
}

?>
