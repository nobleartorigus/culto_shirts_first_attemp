<?php

class Categoria{
	private $id;
	private $nombre;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getNombre() {
		return $this->nombre;
    }

    function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setId($id) {
		$this->id = $id;
    }

    public function getAll(){
		$categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
		return $categorias;
    }
    
    public function save(){
		$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
}

?>