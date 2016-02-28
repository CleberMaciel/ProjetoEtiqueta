<?php
require "../includes/validar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            @import "../css/estilo.css";
        </style>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
        <title>Cadastro de Fabricantes</title>
    </head>
    <body>
        <fieldset id="fabricanteCampo">
            <h3>Cadastro de Fabricante</h3>
            <form name="cadFabricante" action="../action/registrarfabricante.php" method="post" id="formFabricante">
                <input type="text" name="nome" id="nome"  placeholder="Insira aqui o nome do Fabricante" class="campo" required pattern="^[a-z-A-Z0-9]{5,20}$"><br><br>
                <input type="submit" name="acao" value="Cadastrar Fabricante" class="botaoCadastro">
            </form>
        </fieldset>
        <fieldset id="etiquetaCampo">
            <h3>Cadastro de Etiquetas</h3>

            <form name="cadEtiqueta" action="../action/registrarEtiqueta.php" method="post" class="campo">
                <input type="text" name="nome" id="nome" placeholder="Nome da etiqueta" class="campo" required pattern="^[a-z-A-Z0-9-]{5,20}$"><br><br>
                <input type="number" name="altura" id="altura" placeholder="Altura em cm" class="campo" min="0" max="20000"  pattern="^[0-9]{2,4}$"><br><br>
                <input type="number" name="largura" id="largura" placeholder="Largura em cm"class="campo" min="0" max="20000"  pattern="^[0-9]{2,4}$"><br><br>		
                <select name="tipoPapel" id="tipoPapel" class="campo" required>
                    <option value=""disabled selected="">Escolha o tipo de papel</option>
                    <option value="4A0">4A0 [168.20cm x 237.80cm]</option>	
                    <option value="2A0">2A0 [118.90cm X 168.20cm]</option>
                    <option value="A0">A0 [84.10cm x 118.90cm]</option>
                    <option value="A1">A1 [59.40cm x 84.10cm]</option>
                    <option value="A2">A2 [42cm x 59.40cm]</option>
                    <option value="A3">A3 [29.70cm x 42cm]</option>
                    <option value="A4">A4 [21cm x 29.70cm]</option>
                    <option value="A5">A5 [14.80cm x 21cm]</option>
                    <option value="A6">A6 [10.50cm x 14.80cm]</option>
                    <option value="A7">A7 [7.40cm x 10.50cm]</option>
                    <option value="A8">A8 [5.20cm x 7.40cm]</option>
                    <option value="A9">A9 [3.70cm x 5.20cm]</option>
                    <option value="A10">A10 [2.60cm x 3.70cm]</option>
                    <option value="B0">B0 [100cm x 141.40cm]</option>
                    <option value="B1">B1 [70.70cm x 100cm]</option>
                    <option value="B2">B2 [50cm x 70.70cm]</option>
                    <option value="B3">B3 [35.30cm x 50cm]</option>
                    <option value="B4">B4 [25cm x 35.30cm]</option>
                    <option value="B5">B5 [17.60cm x 25cm]</option>
                    <option value="B6">B6 [12.50cm x 17.60cm]</option>
                    <option value="B7">B7 [8.80cm x 12.50cm]</option>
                    <option value="B8">B8 [6.20cm x 8.80cm]</option>
                    <option value="B9">B9 [4.40cm x 6.20cm]</option>
                    <option value="B10">B10 [3.10cm x 4.40cm]</option>
                    <option value="C0">C0 [91.70cm x 129.70cm]</option>
                    <option value="C1">C1 [64.80cm x 91.70cm]</option>
                    <option value="C2">C2 [45.80cm x 64.80cm]</option>
                    <option value="C3">C3 [32.40cm x 45.80cm]</option>
                    <option value="C4">C4 [22.90cm x 32.40cm]</option>
                    <option value="C5">C5 [16.20cm x 22.90cm]</option>
                    <option value="C6">C6 [11.40cm x 16.20cm]</option>
                    <option value="C7">C7 [8.10cm x 11.40cm]</option>
                    <option value="C8">C8 [5.70cm x 8.10cm]</option>
                    <option value="C9">C9 [4cm x 5.70cm]</option>
                    <option value="C10">C10 [2.80cm x 4cm]</option>
                    <option value="Carta/Letter">Carta/Letter [21.60cm x 27.90cm]</option>
                    <option value="Oficio/Legal">Oficio/Legal [21.60cm x 35.60cm]</option>
                    <option value="Oficio2/Folio">Oficio2/Folio [21.60cm x 33cm]</option>
                    <option value="Oficio 9">Oficio 9 [21.50cm x 31.50cm]</option>
                    <option value="Tabloide">Tabloide [27.90cm x 43.20cm]</option>
                </select><br><br>

                <select name="fabricante" id="fabricante" class="campo" required>
                    <option value="" disabled selected="">Escolha o fabricante</option>
                    <?php
                    include "../includes/conexao.inc.php";
                    include "../dao/fabricanteDAO.php";

                    $fabricantes = new fabricanteDAO();
                    echo $fabricantes->montarCombo();
                    ?>

                </select><br><br>
                <input type="submit" name="acao" value="Cadastrar Etiqueta" class="botaoCadastro"/>	<br>
                <a href="../index.php" class="jujuba">Voltar para página inicial</a>
            </form>

        </fieldset><br><br>


    </body>
</html>