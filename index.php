<?php

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');
define('DEFAULT_HOME', 'home');
define('TEMPLATE_DIR', SITE_PATH . 'template/');
define('RESOURCE_DIR', SITE_PATH, 'public/');
define('URL','http://localhost/berlatih/');



require SITE_PATH . 'config/db.php';
require SITE_PATH . 'config/admin.php';

function __autoload($name) {
    $filename = SITE_PATH . 'system/' . $name . '.php';
    if (file_exists($filename)) {
        require $filename;
    }
}

try {
    Session::init();
    $req = new Request();
    Router::route($req);
} catch (Exception $e) {
    echo $e->getMessage() . '<br/>';
}
