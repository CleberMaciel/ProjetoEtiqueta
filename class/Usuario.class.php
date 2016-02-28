<?php 

class Usuario{

	private $id;
	private $nome;
	private $password;

	function __construct($id="", $nome="",$password=""){
		$this->id = $id;
		$this->nome = $nome;
		$this->password = $password;
		
	}//fim construtor

	function &__set($prop,$val){
		$this->$prop = $val;
	}

	function &__get($prop){
		return $this->$prop;
	}
}//fim da classe

 ?>