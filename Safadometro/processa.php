<?php

function somatorio(int $mes){
    $somatorio = 0;

    for ($i=0; $i <= $mes; $i++) { 
        $somatorio += $i;
    }

    return $somatorio;
}
function somaDigitos(int $ano){
    $soma = 0;

    while ($ano > 0) {
        $digito = $ano % 10;
        $soma += $digito;
        $ano = $ano / 10;
    }

    return $soma;
}

$dia = $_REQUEST["campo_dia"];
$mes = $_REQUEST["campo_mes"];
$ano = $_REQUEST["campo_ano"];

$somatorio = somatorio($mes);
$somaDigitos = somaDigitos($ano);

$safadeza = $somatorio + (($somaDigitos * (50-$dia)) / 10);
$anjo = 100 - $safadeza;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php print "Você é $anjo% anjo, perfeito, mas $safadeza% vagabundo!";?></h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLmPweWvFgfWiAeMSvXPkbCx1i9GGt49oigQ&s" alt=""><br>

    <a href="index.html">Voltar</a>
</body>
</html>