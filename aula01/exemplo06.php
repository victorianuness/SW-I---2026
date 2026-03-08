<?php

/*
===========================
    OPERADORES LÓGICOS
===========================

&&  → AND (E)
true se TODOS forem true

||  → OR (OU)
true se PELO MENOS um for true

!   → NOT (NÃO)
inverte o valor

true  → 1
false → vazio


* REGRAS RÁPIDAS

true && true   → true
true && false  → false

true || false  → true
false || false → false

!true  → false
!false → true
*/

$a = true;
$b = null; // null é considerado false

// OR → basta um ser true
$resultado = $a || $b;

echo "Resultado = $resultado";

?>
