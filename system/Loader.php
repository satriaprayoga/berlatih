<?php
    class Loader{

		public function view($name,array $vars = null){
			$file = SITE_PATH.'views/'.$name.'View.php';

			if(is_readable($file)){
				require($file);
				$view=$name.'View';
				$view=new $view();
				if(isset($vars)){
					extract($vars);
					$view->render($vars);
				}else{
					$view->render();
				}
				return true;
			}
			throw new Exception('View issues');
		}	
		public function model($name){
			$model = $name.'Model';
			$modelPath = SITE_PATH.'models/'.$model.'.php';

			if(is_readable($modelPath)){
				require_once($modelPath);

				if(class_exists($model)){
					$registry = Registry::getInstance();
					$registry->$name = new $model;
					return true;
				}
			}
			throw new Exception('Model issues.');	
		}	
	}