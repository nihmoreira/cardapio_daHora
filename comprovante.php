<?php

$qdt1 = $_POST ["quantidade1"];
$qdt2 = $_POST ["quantidade2"];
$qdt3 = $_POST ["quantidade3"];

$qdt4 = $_POST ["qtd_bebida1"];
$qdt5 = $_POST ["qtd_bebida2"];
$qdt6 = $_POST ["qtd_bebida3"];

$qdt7 = $_POST ["p1"];
$qdt8 = $_POST ["p2"];
$qdt9 = $_POST ["p3"];

$qdt10 = $_POST ["d1"];
$qdt11 = $_POST ["d2"];
$qdt12 = $_POST ["d3"];

$obs = $_POST ["obs"];
$valorFinal = 0.00;

if(isset($_POST["opcao1"])){
    $valorFinal = $valorFinal + 13.50 * $qdt1;
}

if(isset($_POST["opcao2"])){
    $valorFinal = $valorFinal + 15.60 * $qdt2;
}

if(isset($_POST["opcao3"])){
    $valorFinal = $valorFinal + 19.50 * $qdt3;
}

if(isset($_POST["opcao4"])){
    $valorFinal = $valorFinal + 3 * $qdt4;
}

if(isset($_POST["opcao5"])){
    $valorFinal = $valorFinal + 5.80 * $qdt5;
}

if(isset($_POST["opcao6"])){
    $valorFinal = $valorFinal + 5.99 * $qdt6;
}

if(isset($_POST["opcao7"])){
    $valorFinal = $valorFinal + 18 * $qdt7;
}

if(isset($_POST["opcao8"])){
    $valorFinal = $valorFinal + 25.70 * $qdt8;
}

if(isset($_POST["opcao9"])){
    $valorFinal = $valorFinal + 20.90 * $qdt9;
}

if(isset($_POST["opcao10"])){
    $valorFinal = $valorFinal + 7 * $qdt10;
}

if(isset($_POST["opcao11"])){
    $valorFinal = $valorFinal + 14.99 * $qdt11;
}

if(isset($_POST["opcao12"])){
    $valorFinal = $valorFinal + 20.80 * $qdt12;
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$ ", number_format($valorFinal,"2");
echo "<br> Obs: ", $obs;
echo "<br><a href='cardapio.html'>Voltar</a>";
?>