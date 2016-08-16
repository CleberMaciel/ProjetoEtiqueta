<!DOCTYPE html>
<html>
    <head>
        <title>Todas as Etiquetas</title>
        <style type="text/css">
            @import '../css/estilo.css';
        </style>
        <!-- <meta http-equiv="refresh" content="5"> -->
         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>
    <body>

        <div id="div_ver">
        
          <?php 
if(isset($_POST)){
    include "../includes/conexao.inc.php";
    include "../class/etiqueta.class.php";
      include "../class/fabricante.class.php";
    include "../dao/etiquetaDAO.php";

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    

    
    $acoes = new etiquetaDAO();
    echo $acoes->pesquisar_nome($nome);
    
}//fim


 ?>

        
        <a href="../index.php" class="jujuba">Clique aqui para voltar</a>
        </div>
    </body>
</html>