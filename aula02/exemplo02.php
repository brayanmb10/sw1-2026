<?php 
    $nome = "Gustavo";
    $idade = 16;
    $altura = 1.70;
    $status = true;

    //exibir valores na tela
    echo "o nome é: " . $nome;
    echo "<br>";

    //verificar tipo e valor da variavel
    var_dump($altura);
    echo "<br>";
    print_r($altura);
    for ($i=0; $i <6; $i++) { 
        echo $i . "<br>";
    }

    //curiosidade a respeito de valores booleanos
    echo "o status é $status";
?>