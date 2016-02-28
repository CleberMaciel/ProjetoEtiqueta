<?php
require "../includes/validar.php";
?>
<!DOCTYPE html>
<html ng-app>
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
        <meta charset="UFT-8">
        <title>Cadastro de usuarios</title>
        <style type="text/css">
            @import "../css/estilo.css";
        </style>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js">
       </script> 
    <script>
    function validaSenha (input){ 
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('As senhas não correspondem, por favor verificar.');
        } else {
            input.setCustomValidity('');
        }
    } 
    </script>
            

        </script>

    </head>
    <body>
        <div id="formulario_login">
        <h3>Cadastro de novos usuarios</h3>
            <form name="cadUsuario" id="cadUsuario" action="../action/cadastraruser.php" method="post" onsubmit="validar()">

                <input ng-model="item1" type="text" name="nome" id="nome" placeholder="ex: user-user" class="campo" required pattern="[a-z]{5,10}-[a-z]{5,10}"><br><br>
                <input ng-model="item2" type="password" name="password" id="password" placeholder="informe a senha" class="campo" required ><br><br>
                 <input ng-model="item3" type="password" name="password2" id="password" placeholder="digite novamente a senha" class="campo" required oninput="validaSenha(this)" ><br><br>

                <div id="centralizar_botao">
                    <input ng-disabled="cadUsuario.$invalid" type="submit" name="acoes" value="cadastrar" class="botao_pes" onclick="return validar()">
                    
                </div>

            </form>
        </div>
    </body>
</html>