<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de usuarios</title>
        <style type="text/css">
            @import "../css/estilo.css";
        </style>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>
    <body>
        <h3>Efetue seu login.</h3>
        <div id="formulario_login">
            <form name="login" id="login" action="../verificar.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome de Usuario" class="campo"><br><br>
                <input type="password" name="password" id="password" placeholder="Senha" class="campo"><br><br>

                </div>

                <div id="centralizar_botao">
                    <input type="submit" name="acoes" value="entrar" class="botao_pes"><br><br>
                    <a href="../index.php" class="jujuba"> Voltar para pagina inicial</a>


                </div>

            </form>

    </body>
</html>