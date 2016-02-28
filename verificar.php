<?php 
if(isset($_POST["acoes"])){

	include "includes/conexao.inc.php"; 
	include "class/Usuario.class.php";
	include "dao/usuarioDAO.php";


	$nome = $_POST["nome"];
	$password = $_POST["password"];


	$user = new Usuario("",$nome, $password);

	$dao = new usuarioDAO();

	if (($retorno = $dao->validar($user)) == null) {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>ERRO</title>
			<style type="text/css">
			@import "css/estilo.css";
			</style>
		</head>
		<body>
		<br><br><br>
		
		<h3>Usuario/Senha invalidos
			<!--<img src="img/ico/coelho-loko.gif">-->
		</h3>

		<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=visao/login.php">

		</body>
		</html>

		<?php
		

	}else{
		session_start();
		
		$_SESSION["id"] = session_id();
		$_SESSION["nome"] = $retorno;

		header("Location: index.php");
	}


}

 ?>