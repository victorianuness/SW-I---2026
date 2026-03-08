<?php

/*
===========================
 SWITCH (igual vários IF)
===========================

Usa quando testa UMA variável
com vários valores.

Python:
if dia == "segunda"

PHP:
case "segunda"

break → para o switch
default → igual ao else
*/

$dia = "terça";

switch($dia){

    case "segunda":
        echo "Inicio da Semana";
        break;

    case "sexta":
        echo "fim de semana chegando";
        break;

    default:
        echo "Dia normal.";
}

?>
