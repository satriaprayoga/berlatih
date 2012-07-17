<?php
class ErrorView extends View {
	public function __construct() {
		parent::__construct();
	}

	public function configureTemplate($temp_files) {
		$temp_files['header'] = TEMPLATE_DIR . 'header.php';
		$temp_files['body'] = SITE_PATH . 'views/404.php';
		$temp_files['footer'] = TEMPLATE_DIR . 'footer.php';
		foreach ($temp_files as $key => $value) {
			$this -> parse($value);
		}
	}

}
