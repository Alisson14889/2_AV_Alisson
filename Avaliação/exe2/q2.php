<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["nome"];
        $nas = $_GET["nasc"];
        $dt = date("Y") - $nas;

        if($dt >= 0 && $dt <= 11){
            echo "Seu nome é $n";
            echo "</br>Você tem $dt anos";
            echo "</br>Criança! &#128118;";
        }
        elseif($dt >= 12 && $dt <= 14){
            echo "Seu nome é $n";
            echo "</br>Você tem $dt anos";
            echo "</br>Adolescente! &#128102;";
        }
        elseif($dt >= 15 && $dt <= 18){
            echo "Seu nome é $n";
            echo "</br>Você tem $dt anos";
            echo "</br>Jovem! &#128104;";
        }
        elseif($dt >= 19 && $dt <= 64){
            echo "Seu nome é $n";
            echo "</br>Você tem $dt anos";
            echo "</br>Adulto! &#128113;" ;
        }
        else{
            echo "Seu nome é $n";
            echo "</br>Você tem $dt anos";
            echo "</br>Idoso! &#128116;";
        }
    ?>

    </br>
    <a href="q2.html"><button>Voltar</button></a>
</div>
</body>
</html>