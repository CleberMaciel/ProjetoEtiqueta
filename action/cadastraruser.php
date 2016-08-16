<?php 
	if (isset($_POST)) {
		# code...
	include "../includes/conexao.inc.php";
	include "../class/Usuario.class.php";
	include "../dao/usuarioDAO.php";


	$nome = $_POST['nome'];
	$password = $_POST['password'];


	$user = new Usuario("",$nome, $password);
	$acoes = new usuarioDAO();

	$acoes->cadastrarUsuario($user);

	}//fim

 ?>