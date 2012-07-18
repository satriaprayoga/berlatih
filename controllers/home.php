<?php

/**
 * 
 */
class Home extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->template_files['header'] = TEMPLATE_DIR . 'header.php';
        $this->view->template_files['footer'] = TEMPLATE_DIR . 'footer.php';
    }

    public function index() {
        $var=array();
        $var['page_title'] = "Hallo";
        $var['content'] = "ini content";
        $var['end_page'] = "End of Page";

        $this->view->render('home', $var);
    }


}
