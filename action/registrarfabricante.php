
<?php
	 
	if(isset($_POST["acao"])){
		include '../includes/conexao.inc.php';
		include '../class/fabricante.class.php';
		include '../dao/fabricanteDAO.php';

		$nome = $_POST["nome"];
			


		$fabricante = new Fabricante("",$nome);
		$acoes = new FabricanteDAO();

		$acoes->cadastrarFabricante($fabricante);
	}


 ?>