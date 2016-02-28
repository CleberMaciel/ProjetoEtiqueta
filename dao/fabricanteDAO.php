<?php

class FabricanteDAO {

    public function cadastrarFabricante($fabricante) {

        global $con;

        try {

            // mysqli_real_escape_string = Escapa caracteres especiais em uma string 
            // para ser utilizada em uma instrução SQL , levando em conta o conjunto
            //  de caracteres atual da conexão
            // mysqli_num_rows = Obtém o número de linhas em um resultado



            $nome = mysqli_real_escape_string($con, $_POST['nome']);
            $resultado = mysqli_query($con, "SELECT idFabricantes FROM fabricantes WHERE nome = '$nome'");
            $num_rows = mysqli_num_rows($resultado);

            if ($num_rows > 0) {
                ?>
                <html>
                    <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
                    <style type="text/css">@import "../css/estilo.css";</style>
                    <body>
                        <br><br>
                        <h3><img src="../img/ico/cross.ico"> Fabricante <?php echo $nome; ?> já cadastrado.</h3>
                        <h3>Página será redirecionado automaticamente dentro de 3 segundos.</h3>
                        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadFabricanteEtiqueta.php">  
                    </body>
                </html>
                <?php
            } else {
                $sql = $con->prepare("INSERT INTO fabricantes (nome)" . "VALUES (?)");

                $sql->bind_param('s', $fabricante->nome);

                if ($sql->execute())
                    
                    ?>
                <html>
                    <meta charset="UTF-8">
                    <style type="text/css">@import "../css/estilo.css";</style>
                    <body>
                        <br><br>
                        <h3><img src="../img/ico/ok.ico"> Fabricante cadastrado com sucesso no sistema.</h3>
                        <h3>Página será redirecionado automaticamente dentro de 3 segundos.</h3>
                        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadFabricanteEtiqueta.php"> 
                    </body>
                </html>
                <?php
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

//cadastrarFabricante

    function montarCombo() {

        global $con;
        try {
            $sql = $con->prepare("SELECT * FROM fabricantes");

            $sql->execute();

            $sql->bind_result($id, $nome);

            while ($sql->fetch()) {

                $ops .="<option values='" . $id . "'>" . $id . "-" . $nome . "</option>";
            }//while

            return $ops;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }//fim trycatch
    }

//fim da função

    public function buscarFabricante($nome){
        global $con;

        try {
            $sql = $con->prepare("SELECT nome FROM fabricantes WHERE nome = ?");
        $sql->bind_param('s',$nome);
        $sql->execute();
            $sql->bind_result($nome);
            $sql->fetch();
           if($nome == null){
                echo "não existe fabricante com esse nome";
           }else{
                echo "Fabricante encontrado: " .$nome . ", ele existe  no banco de dados";
                
           }
            
        

        } catch (Exception $e) {
            echo "ERRO".$e->getMessage();
        }
        
    }//fim do metodo
}//fim da classe
?>