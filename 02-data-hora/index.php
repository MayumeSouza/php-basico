<?php

date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:s");

$mensagem = "Hoje é " . $data . " e agora são " . $hora . ".";

// Saudação
$horaAtual = (int) date("H");

if ($horaAtual < 12) {
    $saudacao = "Bom dia";
} elseif ($horaAtual < 18) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data e hora</title>
</head>

<body>

    <h1>Data e hora do servidor</h1>

    <p><?= $mensagem ?></p>

    <h2><?= $saudacao ?></h2>

</body>
</html>