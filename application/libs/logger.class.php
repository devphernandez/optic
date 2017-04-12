<?php 
class Logger  {

	protected $_path;
	protected $_fileName;

	public function __construct() {
		
		//directorio en el cual se guardara el archivo
		$path = dirname(__DIR__).'\logs';
		$this->_fileName = 'log_'.date("Ymd").'.log';
		
		if (empty($path)){
			Throw new Exception("Path must be filled");
		}
		if (!file_exists($path)) {
			Throw new Exception("The Path doesn't exists.");
		}
		if (!is_writeable($path)) {
			Throw new Exception("You can write on the give path");
		}
		$this->_path = $this->_parsePath($path);
	}   

	//valida la ruta y añade el nombre del archivo
	protected function _parsePath($path) {
		$strLenght = strlen($path);
		$lastChar = substr($path, $strLenght - 1, $strLenght);
		$path = $lastChar != "/" ? $path . "/" : $path;
		if ( is_dir($path) ) {
			return $path . $this->_fileName;
		} else {
			return $path;
		}
	}

	//agrega la nueva linea en el archivo
	protected function _save($line) {
		$fhandle = fopen($this->_path, "a+");
		fwrite($fhandle, $line);
		fclose($fhandle);
	}

	//formatea el mensaje de error para guardar la nueva linea
	public function addLine($clase, $mensaje){
		$mensaje = is_array($mensaje) ? print_r($mensaje, true) : $mensaje;
		$mensaje = date("[h:i:s]") . " $clase -- $mensaje\n";
		$this->_save($mensaje);
	}
}
?>