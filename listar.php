-+.<?php
session_start();
include_once("conexao.php")
?>
<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <meta charset="utf-8">
        <title>CRUDD - listar</title>
</head>
<body>
    <h1>listar Usuário</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $result_usuarios = "SELECT * FROM usuarios";
    $resultado_usuarios= mysqli_query($conn, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        echo $row_usuario['id'] . "<br>";
        echo $row_usuario['nome'] . "<br>";
        echo $row_usuario['email'] . "<br>";
        echo $row_usuario['senha'] . "<br><hr>";
    }
</body>
     