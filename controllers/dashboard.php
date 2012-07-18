<?php

class Dashboard extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->template_files['header'] = SITE_PATH . 'views/admin/dashboard_header.php';
        $this->view->template_files['footer'] = SITE_PATH . 'views/admin/dashboard_footer.php';
        Session::init();
        $authenticated = Session::get('authenticated');
        if ($authenticated == false) {
            header('location:' . URL . 'login');
            exit;
        }
    }

    public function index() {
        $this->view->render('admin/dashboard');
    }

    public function newPage() {
        $this->view->render('admin/dashboard_new_page');
    }

    public function editPage() {
        
    }

    public function savePage() {
        
    }

    public function deletePage() {
        
    }

    public function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
