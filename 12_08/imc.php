<?php
function calcularIMC($peso, $altura) {
    if ($altura <= 0) {
        return "Altura deve ser maior que zero.";
    }
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 24.9) {
        return "Saudável";
    } elseif ($imc < 29.9) {
        return "Sobrepeso";
    } else {
        return "Obeso";
    }
}


$peso = $_POST['peso'] ?? 0;
$altura = $_POST['altura'] ?? 0;

$imc = calcularIMC($peso, $altura);
$classificacao = classificarIMC($imc);

echo "Seu IMC é " . number_format($imc, 2) . " e você está : " . $classificacao . ".";
?>