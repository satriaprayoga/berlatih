<?php

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');

require SITE_PATH . 'configs/config.php';

function __autoload($name) {
    $filename = SITE_PATH . 'core/' . $name . '.php';
    if (file_exists($filename)) {
        require $filename;
    }
}

$req = new Request();
Router::route($req);
