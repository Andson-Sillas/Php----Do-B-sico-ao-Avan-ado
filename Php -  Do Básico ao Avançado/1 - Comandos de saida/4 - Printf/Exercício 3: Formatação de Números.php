<?php
//Descrição: Use printf para formatar um número com duas casas decimais.

$valor = 200;
$frase = "O preço do notebook custa %d";

printf(number_format($frase, 2, ",", "."));
