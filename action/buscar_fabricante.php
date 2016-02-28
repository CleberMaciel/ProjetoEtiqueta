<?php 
if(isset($_POST)){
	include "../includes/conexao.inc.php";
	include "../class/fabricante.class.php";
	include "../dao/fabricanteDAO.php";

	$nome = $_POST['nome'];
	

	
	$acoes = new fabricanteDAO();
	
	echo $acoes->buscarFabricante($nome);
	
}//fim


 ?>