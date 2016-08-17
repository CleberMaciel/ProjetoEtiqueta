<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        @import 'css/estilo.css';
    </style>
    <script type="text/javascript">

        window.onload = function(){
            document.getElementById("categoria").onchange = function(){
                this.parentNode.action = this.value + ".php";
            }
        }
    </script>
 <?php include "header.php"; ?>
    <title>Etiquetas</title>

</head>

<body>
<div class="teste">
        <form action="" name="formPesquisa" id="formPesquisa" method="post">
            <div class="mdl-textfield mdl-js-textfield">
            <input type="text" class="mdl-textfield__input" name="nome" id="nome" required>
            <label class="mdl-textfield__label" for="nome">nome, altura, largura, fabricante...</label>
            </div><br/>

            <select class="campo" id="categoria" name="categoria" required>
             <option value="" disabled selected="" >Escolha uma categoria de busca</option>
             <option value="action/buscado_altura">Altura</option>
             <option value="action/buscado_largura">Largura</option>
             <option value="action/buscado_fabricante">Fabricante/Marca</option>
             <option value="action/buscado_nome">Modelo/Nome</option>
             <option value="action/buscado_tipopapel">Tipo do Papel</option>
         </select>
         <br><br>

         <input name="acoes" id="acoes"  type="submit" class="botao_pes" value="Pesquisar" title="Irá pesquisar todos os tipos de etiquetas que você selecionou acima.">

     </form>
 </div>       
</body>
</html>
