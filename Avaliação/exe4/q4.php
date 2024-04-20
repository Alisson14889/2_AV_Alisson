<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["nome"];
        $m = $_GET["mail"];
        $dt = $_GET["dat"];
        $s = $_GET["sexo"];
        $c = $_GET["civil"];
        $p = $_GET["profiss"];

        $data_nas = new DateTime($dt);
        $data_at = new DateTime();
        $dif = $data_at ->diff($data_nas); /*show!!*/
        $idad = $dif ->y;

        echo "Seu nome: $n &#128488;";
        echo "</br>Seu E-mail: $m &#128172;";
        echo "</br>Sua data de nascimento: $dt &#128488;";
        echo "</br>Sua idade: $idad &#128172;";
        echo "</br>Seu sexo: $s &#128488;";
        echo "</br>Seu satus de civil: $c &#128172;";
        echo "</br>Sua profissão: $p &#128488;";

    ?>
    </br>
    <a href="q4.html"><button>Voltar</button></a>
</div>
</body>
</html>