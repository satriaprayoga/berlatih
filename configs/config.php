<?php

/**
 * Global configuration
 * 
 *@author satriaprayoga 
 */

/**
 *website configuration 
 */

define('DEFAULT_HOME', 'home');
define('TEMPLATE_DIR', SITE_PATH . 'template/');
define('URL','http://localhost/berlatih/');
define('PUBLIC_DIR', URL. 'public/');
define('CSS_DIR',PUBLIC_DIR.'css/');
define('JS_DIR',PUBLIC_DIR.'js/');
define('IMG_DIR',PUBLIC_DIR.'images/');

/**
 *database configuration 
 */
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','');
define('DB_USERNAME','');
define('DB_PASSWORD','');

/**
 * Hash configuration 
 */
define('HASH_KEY','i3annaekmobilma2zdaanmaketopime2ksikoan');


function baseUrl(){
    return URL;
}

function assets(){
    return PUBLIC_DIR;
}