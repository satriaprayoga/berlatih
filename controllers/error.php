<?php

/**
 * 
 */
class Error extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->template_files['header'] = TEMPLATE_DIR . 'header.php';
        $this->view->template_files['footer'] = TEMPLATE_DIR . 'footer.php';
    }

    public function index() {
        $var=array();
        $var['page_title'] = "Error";
        $var['content'] = "404";
        $var['end_page'] = "End of Page";
        $this->view->render('404', $var);
    }

}
