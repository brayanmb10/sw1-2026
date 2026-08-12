<?php
$nome = $_POST['Nome'];
$cpf = $_POST['cpf'];

$cpf = preg_replace('/[^0-9]/', '', $cpf);
if (strlen($cpf) != 11) 
{
    echo "o CPF inserido está inválido. o CPF deve conter obrigatoriamente 11 dígitos.";
} 

else 
{
    $soma = 0;
    for ($i = 0; $i < 9; $i++) 
        $soma += $cpf[$i] * (10 - $i);
    $resto1 = $soma % 11;
    $soma = 0;


    for ($i = 0; $i < 10; $i++) 
        $soma += $cpf[$i] * (11 - $i);
    $resto2 = $soma % 11;

    if ($resto1 < 2 && $cpf[9] == 0 || $resto1 >= 2 && $cpf[9] == 11 - $resto1 || $resto2 < 2 && $cpf[10] == 0 || $resto2 >= 2 && $cpf[10] == 11 - $resto2)
            echo "$nome, o CPF inserido é válido.";
    else 
        echo "$nome, o CPF inserido é inválido.";
}
?>



