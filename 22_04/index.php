<?php
    // Array associativo que funciona como um "menu"
    // A chave (ex: Home) é o nome do link
    // O valor é o conteúdo que será exibido na página
    $_MENU = [
        'Home' => '<h1>Pagina inicial</h1>',
        'Sobre' => '<h1>pagina sobre </h1>',
        'Contato' => '<h1>pagina contato</h1>',
        'experiências' => '<h1>pagina experiências</h1>',
        'projetos' => '<h1>pagina projetos</h1>',
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
        echo '<a class="logo"><img src="imagem/images.png" alt="Logo"></a>';
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