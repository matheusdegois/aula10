<?php

include("validarSessao.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Seja bem vindo <?php echo $_SESSION['nome']; ?>
    <br>
    <a href="sair.php">Sair do Sistema</a>

    
</body>
</html>