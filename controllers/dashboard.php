<?php

class Dashboard extends Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->load->view('Dashboard');
    }

    public function newPage() {
        echo 'new page form here';
    }

    public function editPage() {
        
    }

    public function savePage() {
        
    }

    public function deletePage() {
        
    }

}
