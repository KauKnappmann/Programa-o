<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <?php
 require_once('utils/utils.php');
 //require_once('apresentaVeterinario.php');
// caminho do seu arquivo de conexão ao banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=marcela', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = "SELECT * FROM veterinario WHERE  id = ".$_GET["id"];
$consulta = $pdo->query($consulta);
    ?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>

        @import url('https://fonts.googleapis.com/css?family=Abel&display=swap');
    </style>
    <title>Apresentação de Veterinário</title>
</head>
<body style="background-color: #F5F5F5;">
    <div class="navbar-fixed">
        <nav class="teal darken-3">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Gado e Veterinário</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="veterinario.php">Cadastrar</a></li>
                    <li><a href="listaVeterinario.php">Lista</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
 <div class="row">
    <div class="col s8 m5">
      <div class="card">
        <div class="card-image">
    <?php
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
       ?><center><img src="<?php echo $linha['imagem'];?>"  class="circle responsive-img"></center>
       </div>
       <div class="card-content">
       <?php
       echo "<br>";
        echo "<b>ID:</b> ";
       echo $linha['id'];
       echo "<br>";
        echo "<b>Nome:</b> ";
       echo $linha['nome'];
       echo "<br>";
        echo "<b>CRMV:</b> ";
       echo $linha['crmv'];
       echo "<br>";
        echo "<b>Telefone:</b> ";
       echo $linha['telefone'];
       echo "<br>";
        echo "<b>Informações:</b> ";
       echo $linha['informacoes'];
       //https://materializecss.com/cards.html
    }
    ?>
</div>
</div></div>
</div>
</div>

</body>
</html>