<?php

/**
 * @author satriaprayoga
 */
class Router {

	public static function route(Request $request) {
		$controller = $request -> getController();
		$method = $request -> getMethod();
		$args = $request -> getArgs();
		$file = 'controllers/' . $controller . '.php';
		if (file_exists($file)) {
			require $file;
			$controller = new $controller();
			$method = (is_callable(array($controller, $method))) ? $method : 'index';
			if (!empty($args)) {
				call_user_func_array(array($controller, $method), $args);
			} else {
				call_user_func(array($controller, $method));
			}
			return ;
		} else {
			Router::error();
		}

	}

	static function dump($url) {
		print_r($url);

	}

	static function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller -> index();
		return false;
	}

}
