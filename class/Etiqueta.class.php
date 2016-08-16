<?php 
class Etiqueta{
	private $id;
	private $nome;
	private $altura;
	private $largura;
	private $tipoPapel;
	private $fabricante;

	function __construct($id="",$nome="",$altura="",$largura="", $tipoPapel="", $fabricante=""){
		$this->id = $id;
		$this->nome = $nome;
		$this->altura = $altura;
		$this->largura = $largura;
		$this->tipoPapel = $tipoPapel;
		$this->fabricante = $fabricante;
	}

	    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }
    

	public function __toString(){
		return "ID: ".$this->id."<br>Nome: ".$this->nome."<br>altura: ".$this->largura."<br>Tipo de Papel: ".$this->tipoPapel."<br>Fabricante: ".$this->fabricante;
	}

}

 ?>