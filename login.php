<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];


    

    $sql = "INSERT INTO usuarios (nome,email) VALUES ('$nome', '$email')";

    if ($conect->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        header("Location:agendamento.php");
    } else {
        echo "Erro no cadastro: " . $mysqli->error;
    }

    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo/estilo.css">
    <link rel="stylesheet" href="estilo/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
	<title>Bichos&Cia</title>
</head>
<body>

	<section class="cabecalho">
	<div>
		<a href="home.html"><img src="img/logomod..png" class="logo" alt="logo"></a>
        </div>
        <div class="sessoes">
            <ul>
                <a href="home.html">HOME</a>
                
                <a href="petshop.html">PET SHOP</a>
                <a href="login.php">AGENDAR</a>
            </ul>
        </div>
    </section>

  <section id="login">
<img src="img/login/login.png" class="img">

<div class="container" >
<h2>Preencha os campos para o agendamento de consultas:</h2>

    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <div class="login">
        <form method="post" action=""> 

          <p><label for="nome_login">Seu nome:</label></p>
          <input type="text" name="nome" required/>
             
          <p><label for="email_login">E-mail:</label></p>
          <input type="text" name="email" required/>
          
           <br><br>

          <button type="submit" class="enviar"><img src="img/login/enviar.png"></button>
         
        </form>
    </div>
  </div>
  <br><br>
  
      </div>
</section>