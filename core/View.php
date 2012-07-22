<?php

/**
 * View class
 *
 * @author satriaprayoga
 */
class View {

    public function __construct() {
        
    }

    /**
     * render the view file to browser
     * @param type string $name php file to be rendered. this file must be inside the views/ folder
     */
    public function render($name) {
        require 'views/' . $name . '.php';
    }

}
