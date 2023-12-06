<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo/estilo.css">
    <link rel="stylesheet" href="estilo/agendamento.css">
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
                <a href="agendamento.php">AGENDAR</a>
            </ul>
        </div>
    </section>

    <section id="agendamento">
        <div class="quadro">
            <form class="agendar" action="agendamento1.php" method="POST">

                <p><label for="motivo_agendamento">Motivo do atendimento:</label></p>
                <textarea rows="10" cols="50" name="motivo" required></textarea><br>

                <p><label for="date_agendamento">Data:</label></p>
                <input type="date" id="dob" name="data" required>

                <p><label for="horario_agendamento">Horário:</label></p>
                <input id="hora-cons" type="time" name="horario" required/><br>

                <p><label for="phone">Telefone:</label></p>
                <input type="tel" id="phone" name="telefone" placeholder="(99) 99999-9999" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" title="Número de telefone precisa ser no formato (99) 9999-9999" required><br>

                <button type="submit">CONCLUIR</button>
            </form>
        </div>
       
        <img src="img/agendamento/agendar.png" class="img">
      

    </section>
