<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
<div>
    <?php
        $real = $_GET["num"];
        $result = $real / 5.20;
        
        echo "Você informou R$ ". number_format($real,2,",",".");
        echo "</br>Esse valor em Dólar é UU$ ". number_format($result,2,",",".");
        echo "</br>Cotação do dólar hoje é R$5,20 &#129297;"


    ?>
    </br>
    <a href="q1.html"><button>Voltar</button></a>

</div>    
</body>
</html>