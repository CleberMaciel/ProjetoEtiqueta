<?php 
	if (isset($_POST)) {
		# code...
	include "../includes/conexao.inc.php";
	include "../class/Etiqueta.class.php";
	include "../dao/etiquetaDAO.php";


	$id = $_POST['idEtiquetas'];
	


	$acoes = new etiquetaDAO();

	$acoes->deletar($id);

	}//fim

 ?>