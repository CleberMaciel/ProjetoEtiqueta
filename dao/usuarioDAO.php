<?php

class UsuarioDAO {

    public function cadastrarUsuario($user) {

        global $con;

        try {

            $nome = mysqli_real_escape_string($con, $_POST['nome']);
            $resultado = mysqli_query($con, "SELECT idUsers FROM users WHERE nome = '$nome'");
            $num_rows = mysqli_num_rows($resultado);

             if ($num_rows > 0) {
                ?>
                <html>
                    <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
                    <style type="text/css">@import "../css/estilo.css";</style>
                    <body>
                        <br><br>
                        <h3><img src="../img/ico/cross.ico"> Usuario <?php echo $nome; ?> já cadastrado.</h3>
                        <h3>Página será redirecionado automaticamente dentro de 3 segundos.</h3>
                        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadUsuario.php">  
                    </body>
                </html>
                <?php
            } else {

            $sql = $con->prepare("INSERT INTO users(nome, password)"
                    . "VALUES (?,?)");
            $sql->bind_param('ss', $user->nome, $user->password);
            if ($sql->execute())
                
                ?>
            <!DOCTYPE html>
            <html>
                <head>
                    <title>Cadastro Efetuado com sucesso!</title>
                     <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
                    <style type="text/css">
                        @import "../css/estilo.css";
                    </style>
                </head>
                <body>
                    <h3>Usuario cadastrado com sucesso</h3>
                    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../index.php">
                </body>
            </html>

            <?php
        }
        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
            echo "ERRO2: " . $sql->error;
        }//fim catch
    }

//fim function cadastrarUsuario();

    public function validar($user) {

        global $con;

        //var_dump($user);

        try {

            $sql = $con->prepare("SELECT idUsers, nome FROM users WHERE nome = ? AND password = ?");
            $sql->bind_param('ss', $user->nome, $user->password);
            if ($sql->execute()) {
                $sql->bind_result($idUsers, $nome);
                $sql->fetch();
            }//fecha if

            return $nome;
        } catch (Exception $e) {
            echo "ERRO" . $e->getMessage();
        }
    }

//fim metodo
}

//fim da classe
?>

