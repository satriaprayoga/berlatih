<?php
/**
 * Default home controller
 *
 * @author satriaprayoga
 */
class Home extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->view->message='This is home';
        $this->view->render('home');
    }
}

?>
