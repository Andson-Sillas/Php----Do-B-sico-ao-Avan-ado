<?php
//Descrição: Combine diferentes tipos de dados em uma única chamada de printf.

$inteiro = 42;
$float = 3.14;
$string = "Texto";


printf("Inteiro: %d, float: %.2f, Texto:%5s", $inteiro, $float, $string);
