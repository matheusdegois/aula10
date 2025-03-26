<?php

include("conexao.php");

$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$sql = $conn->prepare("SELECT * from usuarios where email = '$email' and senha = '$senha'");
$sql->execute();

if($sql->rowCount() > 0) { 
    $dados = $sql->fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION["id"] = $dados["id"];
    $_SESSION["nome"] = $dados["nome"];
    $_SESSION["whatsapp"] = $dados["whatsapp"];

    header("location: index.php");
}else{

    header("location: login.php");

}    
?>