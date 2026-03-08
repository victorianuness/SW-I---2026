<?php

/*
===========================
     VARIÁVEIS EM PHP
===========================

✔ Toda variável começa com $
✔ PHP NÃO precisa declarar tipo

Tipos:
string  → texto
int     → número inteiro
float   → número decimal
bool    → true ou false

Ex:
$nome = "Anderson";
$idade = 51;
$altura = 1.85;
$status = true;


===========================
   DEPURAÇÃO (VER VALORES)
===========================

var_dump($var);
→ mostra valor + tipo

print_r($var);
→ mostra só o valor


===========================
       CONCATENAÇÃO
===========================

"." → junta textos

echo "Nome: " . $nome;


===========================
🗣 ASPAS SIMPLES x DUPLAS
===========================

" " → interpreta variável
echo "Olá $nome";

' ' → mostra texto literal
echo '$nome';

*/

$nome = "Anderson";
$idade = 51;
$altura = 1.85;
$status = true;

// depuração
var_dump($nome);
echo "<br>";
print_r($nome);
echo "<br>";

// mostrando variável
echo "O nome é: $nome";
echo "<br>";
echo "O nome é: " . $nome;

echo "<br>";
echo '$nome';

?>
