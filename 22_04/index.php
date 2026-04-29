<?php
    // Array associativo que funciona como um "menu"
    // A chave (ex: Home) é o nome do link
    // O valor é o conteúdo que será exibido na página
    $_MENU = [
        'Home' => '<h1> Origem do nome</h1>
<h2>  título, Vinland Saga, seria uma associação com Vinlândia como descrito em duas sagas nórdicas. Vinland Saga é, entretanto, ambientado na região de Danelaw no início do século XI, e mostra os invasores dinamarqueses da Inglaterra comumente conhecidos como vikings.</h2>
',
        'Sobre' => '<h1> Sobre os mangás</h1>
<h2> Vinland Saga é escrito e ilustrado por Makoto Yukimura. Os capítulos começaram a serem serializados Em dezembro de 2005, Quando o mangá mudou-se à revista mensal seinen Afternoon. Os dois primeiros volumes fora As reimpressões do mangá na Afternoon apresentaram um novo design e as capas foram redesenhadas.o total de páginas são todas mais ou menos a mesma, por volta de 215 páginas por volume.</h2>',
        'contexto historico' => '<h1>contexto histórico real</h1><h2> Vinland Saga se passa na Europa do século XI, durante a era dos vikings. A história mistura fatos reais com ficção e mostra invasões vikings à Inglaterra, as disputas de poder entre dinamarqueses e ingleses, e a busca por Vinland, uma terra pacífica e fértil que alguns vikings acreditavam existir (inspirada na América do Norte, descoberta por Leif Erikson).</h2>
',
        'ilustracoes' => '<h1> os mangás</h1>
<h2>   Vinland Saga é escrito e ilustrado por Makoto Yukimura. Os capítulos começaram a serem serializados Em dezembro de 2005, Quando o mangá mudou-se à revista mensal seinen Afternoon. Os dois primeiros volumes fora As reimpressões do mangá na Afternoon apresentaram um novo design e as capas foram redesenhadas.o total de páginas são todas mais ou menos a mesma, por volta de 215 páginas por volume.</h2>
',
        'licoes de vida' => '  <h1>lições de vida abordados</h1>
<h2>Vingança não resolve nada, Traz apenas dor e vazio;

A verdadeira força é evitar a violência,  Ser forte é escolher a paz;

Liderar é ter propósito, Um bom líder pensa no bem dos outros.',
    ];
?>  

<!DOCTYPE html>
<html>
<head>
    <!-- Define a codificação de caracteres -->
    <meta charset="UTF-8">

    <!-- Importa o arquivo CSS externo -->
    <link rel="stylesheet" href="style.css">

    <!-- Título da página -->
    <title>PHP Teste </title>
</head>

<!-- Cabeçalho da página -->
<header class="alonso">

    <?php
        // Exibe o logo (imagem)
        echo "<div class='container'>";
        echo '<a class="logo"><img src="imagem/logo_v10.png" alt="Logo"></a>';
        echo "<nav><ul>";
        // Percorre o array $_MENU para criar os links do menu
        foreach($_MENU as $key => $value){

            // Cria um link com parâmetro GET (ex: ?page=Home)
            // $key é o nome que aparece no menu
            echo '<li><a href="?page='.$key.'">'.$key.'</a></li>  ';
        }

        echo "</ul></nav></div>";
    ?>

</header>

<body>    

    <?php
        // Verifica se existe um parâmetro "page" na URL
        // Se existir, usa ele
        // Caso contrário, define como "Home" (padrão)
        $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

        // Verifica se a página existe dentro do array $_MENU
        if(array_key_exists($_pagina, $_MENU)){

            // Exibe o conteúdo correspondente à página
            echo $_MENU[$_pagina];

        } else {

            // Caso não exista, mostra mensagem de erro
            echo '<h1>Página não encontrada</h1>';
        }
    ?>  

</body>
</html>