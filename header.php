
<head>
    <link rel="stylesheet" href="mdl/material.min.css">
    <script src="mdl/material.min.js">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <meta charset="UTF-8">
    <style type="text/css"> 
a:link{
text-decoration:none;
color:black;
}

a:visited{
text-decoration:none;
color:black;
}

a:hover{
text-decoration:none;
color:black;
}

a:active{
text-decoration:none;
color:black;
}
</style>
    <title>
        Etiquetas
    </title>


</head>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  
      <header class="mdl-layout__header">
     <div class="mdl-layout__header-row">
     <div class="mdl-layout-icon"></div>
       
 <!-- Title -->
  
      <!-- Add spacer, to align navigation to the right -->


        <!-- Left aligned menu below button -->
        <button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
           <i class="material-icons">more_vert</i>
    </button>

    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
    <?php
    if (!isset($_SESSION['id'])) {
        ?>
        <li class="mdl-menu__item"><a href="visao/login.php" >Efetuar login</a> </li>
        <li class="mdl-menu__item"> <a href="visao/verTodasEtiquetas.php">Visualizar etiquetas</a> </li>
        <?php
    } else {
        ?>
        <li class="mdl-menu__item"><a href="visao/cadUsuario.php">Cadastrar usuario</a> </li>
        <li class="mdl-menu__item"> <a href="visao/cadFabricanteEtiqueta.php">Cadastrar Fabricante/Etiqueta</a></li>
        <li class="mdl-menu__item"> <a href="visao/verTodasEtiquetas.php">Visualizar etiquetas</a> </li>
        <li class="mdl-menu__item"><a href="sair.php">Sair</a></li>
        <?php
    }
    ?>  
</ul>
</div>
</header>


