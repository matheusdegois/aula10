<!--
    login.php
    acaoLogin.php
    index.php
    validarSessao.php
    sair.php


-->

<?php
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="acaoLogin.php" method="post">
        <label>E-mail</label>
        <input type="text" name="txtEmail">
        <br>

        <label>Senha</label>
        <input type="password" name="txtSenha">
        <br>

        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>