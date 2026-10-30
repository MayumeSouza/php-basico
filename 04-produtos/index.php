<?php

$produtos = [
    [
        "nome" => "Teclado mecânico",
        "preco" => 249.90,
        "estoque" => 12
    ],
    [
        "nome" => "Mouse sem fio",
        "preco" => 79.50,
        "estoque" => 30
    ],
    [
        "nome" => "Headset gamer",
        "preco" => 159.90,
        "estoque" => 0
    ],
    [
        "nome" => "Webcam Full HD",
        "preco" => 199.90,
        "estoque" => 8
    ]
];

function formatarPreco(float $valor): string
{
    return "R$ " . number_format($valor, 2, ",", ".");
}

$total = 0;

foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}

$quantidade = count($produtos);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border: 1px solid black;
        }

        .esgotado {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Lista de Produtos</h1>

    <table>

        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Situação</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($produtos as $item): ?>

                <tr>
                    <td>
                        <?= htmlspecialchars($item["nome"]) ?>
                    </td>

                    <td>
                        <?= formatarPreco($item["preco"]) ?>
                    </td>

                    <td>
                        <?= $item["estoque"] ?>
                    </td>

                    <td class="<?= $item["estoque"] > 0 ? "" : "esgotado" ?>">
                        <?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <p>
        <?= $quantidade ?> produtos cadastrados.
        Valor total em estoque:
        <strong><?= formatarPreco($total) ?></strong>
    </p>

</body>

</html>