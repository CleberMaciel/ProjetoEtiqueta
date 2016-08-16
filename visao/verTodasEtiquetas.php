

<!DOCTYPE html>
<html>
    <head>
        <title>Todas as Etiquetas</title>
        <style type="text/css">
            @import '../css/estilo.css';
        </style>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
        <meta http-equiv="refresh" content="5">
    </head>
    <body>

        <div id="div_ver">
            <?php
            include '../includes/conexao.inc.php';
            include '../dao/etiquetaDAO.php';

            $acoes = new etiquetaDAO();
            echo $acoes->mostrar();
            ?>
             <a href="../index.php" class="jujuba">Clique aqui para voltar</a>
        </div>
       
    </body>
</html>