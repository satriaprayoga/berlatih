<?php

/**
 * Default Error controller. this controller will be invoked if some errors occure
 *
 * @author satriaprayoga
 */
class Error extends Controller{
    //put your code here
    public function index() {
       $this->view->message='This is Error Page';
       $this->view->render('404');
    }
}

?>
