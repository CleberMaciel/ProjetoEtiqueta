<?php

class EtiquetaDAO {

    function cadastrarEtiqueta($etiqueta) {
        global $con;

        try {


            $nome = mysqli_real_escape_string($con, $_POST['nome']);
            $resultado = mysqli_query($con, "SELECT idEtiquetas FROM etiquetas WHERE nome = '$nome'");
            $num_rows = mysqli_num_rows($resultado);

            if ($num_rows > 0) {
                ?>
                <html>
                    <meta charset="UTF-8">
                    <style type="text/css">@import "../css/estilo.css";</style>
                    <body>
                        <br><br>
                        <h3><img src="../img/ico/cross.ico"> Etiqueta <?php echo $nome; ?> já cadastrado.</h3>
                        <h3>Página será redirecionado automaticamente dentro de 3 segundos.</h3>
                        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadFabricanteEtiqueta.php">  
                    </body>
                </html>
                <?php
            } else {


                $sql = $con->prepare("INSERT INTO etiquetas(nome,altura,largura,tipoPapel,idFabricantes)" . "VALUES(?,?,?,?,?)");

                $sql->bind_param('siisi', $etiqueta->nome, $etiqueta->altura, $etiqueta->largura, $etiqueta->tipoPapel, $etiqueta->fabricante);

                if ($sql->execute()) {
                    ?>
                    <html>
                        <meta charset="UTF-8">
                        <style type="text/css">@import "../css/estilo.css";</style>
                        <body>
                            <br><br>
                            <h3><img src="../img/ico/ok.ico"> Etiqueta cadastrado com sucesso no sistema.</h3>
                            <h3>Página será redirecionado automaticamente dentro de 5 segundos.</h3>
                            <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadFabricanteEtiqueta.php"> 
                        </body>
                    </html>

                    <?php
                }
            }
        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
            echo "ERRO2: " . $sql->error;
        }//fim try
    }

//fim do metodo

    function mostrar($id = "") {

        global $con;
        try {
            if ($id == "") {
                $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes ");
            } else {
                $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes 
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes ");

                $sql->bind_param('i', $id);
            }
            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

            $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
        }
    }

    public function pesquisar_nome($nome) {

        global $con;

        try {


            $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes WHERE etiquetas.nome = ? ");


            $sql->bind_param('s', $nome);

            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

           $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//fim funcao

    public function pesquisar_altura($nome) {

        global $con;

        try {


            $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes WHERE etiquetas.altura = ? ");


            $sql->bind_param('s', $nome);

            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

         $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//fim funcao

    public function pesquisar_largura($nome) {

        global $con;

        try {


            $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes WHERE etiquetas.largura = ? ");


            $sql->bind_param('s', $nome);

            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

           $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//fim funcao

    public function pesquisar_tipoPapel($nome) {

        global $con;

        try {


            $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes WHERE etiquetas.tipoPapel = ? ");


            $sql->bind_param('s', $nome);

            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

           $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//fim funcao

    public function pesquisar_fabricante($nome) {

        global $con;

        try {


            $sql = $con->prepare("SELECT etiquetas.nome, etiquetas.altura, etiquetas.largura, etiquetas.tipoPapel, fabricantes.nome 
                                      from etiquetas join fabricantes
                                      on fabricantes.idFabricantes = etiquetas.idFabricantes WHERE fabricantes.nome = ? ");


            $sql->bind_param('s', $nome);

            $sql->execute();

            $sql->bind_result($nome, $altura, $largura, $tipoPapel, $fabricante);

            $dados = "<table><tr>"
                    . "<th>Nome/Modelo</th>"
                    . "<th>Altura</th>"
                    . "<th>Largura</th>"
                    . "<th>Tipo Papel</th>"
                    . "<th>Fabricante</th>"
                    . "</tr>";
            while ($sql->fetch()) {
                $dados .="<tr>"
                        . "<td>" . $nome . "  </td>"
                        . "<td>" . $altura . " cm" . "</td>"
                        . "<td>" . $largura . " cm" . "</td>"
                        . "<td>" . $tipoPapel . "</td>"
                        . "<td>" . $fabricante . "</td>"
                        . "</tr>";
            }

            $dados.="</table>";
            echo $dados;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//fim funcao
}

//fim da classe
?>
