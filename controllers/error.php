<?php

/**
 * 
 */
class Error extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $var['page_title'] = "Error";
        $var['content'] = "404";
        $var['end_page'] = "End of Page";
        $this->load->view('Error', $var);
    }

}
