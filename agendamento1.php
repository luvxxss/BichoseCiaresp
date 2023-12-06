<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $motivo = $_POST["motivo"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    $telefone = $_POST["telefone"];

    

    $sql = "INSERT INTO agendados (motivo,data,horario, telefone) VALUES ('$motivo', '$data','$horario', '$telefone')";

    if ($conect->query($sql) === TRUE) {
        echo "Agendamento realizado com sucesso!";
        header("Location:confirmação.html");
    } else {
        $mensagem = "Esta data ou horário está indisponível";
    }

    ?>
    <script>
    alert("<?php echo $mensagem ?>");
    </script>
    <?php    
    }
    ?>