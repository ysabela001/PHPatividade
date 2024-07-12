<div class="titulo"> Operadores </div>

<?php

//teste de mesa Operadores Relacionais
/*
var_dump (1 == 1); //true
var_dump (1 > 1); //false
var_dump (1 < 7); //true

var_dump (111 == '111'); //true
var_dump (111 === '111'); //false - estritamente igual

var_dump (111 != '111'); //false
var_dump (111 !== '111'); //true
*/

//teste de mesa Operadores Lógicos

echo "Verdadeiro ou Falso <br>";

var_dump(true); //true
var_dump(!true); //false
var_dump(!!true); //true

echo "<br> <br>Tabela Verdade 'AND' e 'OU' <br>";

var_dump(true && true); //true
var_dump(true && false); //false
var_dump(false && false); //true
var_dump(true || false); //true


?>