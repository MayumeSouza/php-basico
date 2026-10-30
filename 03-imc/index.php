<?php

$peso = (float) str_replace(",", ".", $_GET["peso"] ?? "0");
$altura = (float) str_replace(",", ".", $_GET["altura"] ?? "0");

$erro = "";
$imc = 0;
$imcFormatado = "";
$classe = "";

if ($peso <= 0 || $altura <= 0) {

    $erro = "Informe peso e altura maiores que zero.";

} else {

    $imc = $peso / ($altura * $altura);

    $imcFormatado = number_format($imc, 1, ",", ".");

    if ($imc < 18.5) {
        $classe = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classe = "Peso normal";
    } elseif ($imc < 30) {
        $classe = "Sobrepeso";
    } elseif ($imc < 35) {
        $classe = "Obesidade grau I";
    } elseif ($imc < 40) {
        $classe = "Obesidade grau II";
    } else {
        $classe = "Obesidade grau III";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>

<body>

    <h1>Calculadora de IMC</h1>

    <form method="get">

        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" id="peso">

        <br><br>

        <label for="altura">Altura (m):</label>
        <input type="text" name="altura" id="altura">

        <br><br>

        <button type="submit">Calcular IMC</button>

    </form>

    <?php if ($erro): ?>

        <p><?= htmlspecialchars($erro) ?></p>

    <?php else: ?>

        <p>Peso: <?= htmlspecialchars($peso) ?> kg</p>

        <p>Altura: <?= htmlspecialchars($altura) ?> m</p>

        <p>
            IMC:
            <strong><?= htmlspecialchars($imcFormatado) ?></strong>
        </p>

        <p>
            Classificação:
            <strong><?= htmlspecialchars($classe) ?></strong>
        </p>

    <?php endif; ?>

</body>

</html>