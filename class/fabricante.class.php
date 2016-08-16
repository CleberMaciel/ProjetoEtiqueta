<?php 

class Fabricante{

	private $id;
	private $nome;

	function __construct($id="", $nome=""){
		$this->id = $id;
		$this->nome = $nome;
	}

	function &__set($prop,$val){
		$this->$prop = $val;
	}

	function&__get($prop){
		return $this->$prop;
	}

	function __toString(){
		return "ID: ".$this->id."<br>Nome: ".$this->nome;
	}

}

 ?>