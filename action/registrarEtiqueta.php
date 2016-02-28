<?php 
	if(isset($_POST["acao"])){
		include '../includes/conexao.inc.php';
		include '../class/Etiqueta.class.php';
		include '../dao/etiquetaDAO.php';

		$nome = $_POST["nome"];
		$altura = $_POST["altura"];
		$largura = $_POST["largura"];
		$tipoPapel = $_POST["tipoPapel"];
		$fabricante = $_POST["fabricante"];

		$etiqueta = new Etiqueta("",$nome,$altura,$largura,$tipoPapel,$fabricante);
		$acoes = new etiquetaDAO();

		$acoes->cadastrarEtiqueta($etiqueta);
	}

 ?>