<?php

class Loader {

    public function view($name, array $vars = null) {
        $file = SITE_PATH . 'views/' . $name . 'View.php';

        if (is_readable($file)) {
            require($file);
            $view = $name . 'View';
            $view = new $view();
            if (isset($vars)) {
                extract($vars);
                $view->render($vars);
            } else {
                $view->render(null);
            }
            return true;
        }
        throw new Exception('fail loading view');
    }

    
}