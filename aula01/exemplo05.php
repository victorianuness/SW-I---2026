<?php

/*
===========================
 OPERADORES DE COMPARAÇÃO
===========================

<   → menor
>   → maior
<=  → menor ou igual
>=  → maior ou igual
==  → igual
!=  → diferente


Comparação sempre retorna:
true  = verdadeiro (echo mostra 1)
false = falso (echo mostra vazio)

=======================================
IF / ELSE
if() verifica automaticamente se é TRUE

if($resultado)
= se for verdadeiro entra
= se for falso vai para o else

var_dump() → mostra tipo + valor real
*/


$a = 1;
$b = 5;

$resultado = $a < $b;

echo "Resultado = $resultado";
echo "<hr>";

var_dump($resultado);

if ($resultado){
    echo "Resultado = SIM";
} else {
    echo "Resultado = NÃO";
}

?>
