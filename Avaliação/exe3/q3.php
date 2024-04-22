<!DOCTYPE html>
<html lang="pt=br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <style>
        button{
            color: aquamarine;
            background-color: darkblue;
        }

    </style>
</head>
<body>
<div>
    <?php
        $n = $_GET["nome"];
        $nt1 = $_GET["not1"];
        $nt2 = $_GET["not2"];
        $nt3 = $_GET["not3"];
        $nt4 = $_GET["not4"];
        $somanot = $nt1 + $nt2 + $nt3 + $nt4;
        $mediaf = $somanot / 4;

        if($mediaf >= 7){
            echo "Nome do aluno: $n";
            echo "</br>Sua média é $mediaf";
            echo "</br>O aluno está aprovado! &#128513;";
        }
        elseif($mediaf >= 5 && $mediaf <= 6){
            echo "Nome do aluno: $n";
            echo "</br>Sua média é $mediaf";
            echo "</br>O aluno está de recuperação. &#128532;";
        }
        else{
            echo "Nome do aluno: $n";
            echo "</br>Sua média é $mediaf";
            echo "</br>O aluno está reprovado. &#128557;";
        }

    ?>
    </br>
    <a href="q3.html"><button>Voltar</button></a>

</div>
</body>
</html>