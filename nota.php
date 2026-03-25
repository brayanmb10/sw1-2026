 <?php
    
        $_nome = $_POST["nome"];
        $_sobrenome = $_POST["sobrenome"];
        $_m1 = $_POST["m1"];
        $_m2 = $_POST["m2"];
        $_m3 = $_POST["m3"];
        $_media= (($_m1+$_m2+$_m3)/3);

        if ($_media >=9) {

echo "MB";

}

if ($_media < 8 && $_media >= 7) {

echo "b";

}

if ($_media < 7 && $_media >= 4) {

echo "r";

}

if ($_media < 4 && $_media >=1) {

echo "i";

}

if ($_media <=0 ) {

echo "NA";

}
        echo "<p>É um prazer te conhecer $_nome $_sobrenome</p> <br> <p> sua média é: $_media </p>";
?>

