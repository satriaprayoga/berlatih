<?php

/**
 * @author satriaprayoga
 */
class View {
	
	private $values=array();
	private $output='';
	protected $temp_files=array();
	
	public function __construct(){
		$this->configureTemplate($this->temp_files);
	}
	
	public function set($key,$value){
		$this->values[$key]=$value;
	}
	
	public function parse($filename){
		if(file_exists($filename)){
			$this->output=$this->output.file_get_contents($filename);
		}
	}
	
	function output(){
		foreach ($this->values as $key => $value) {
			$tags = '{' . $key . '}';
            $this->output = str_replace($tags, $value, $this->output);
		}
		return $this->output;
	}
	
	public function render($data){
		if(isset($data)){
			foreach ($data as $key => $value) {
				$this->set($key, $value);
			}
		}
		$out=$this->output();
		echo $out;
	}
	
	public function configureTemplate($temp_files){}
}
