<div class="titulo">Array</div>

<?php
/*
Crie um array com as características de um carro, sendo elas:
marca é BMW, total de rodas é 4, com teto solar, atinge velocidade 
maxima de 300 e não é blindado.
Imprima duas dessas características
*/

$carro = [
    'marca' =>'BMW',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false
];

print_r($carro);

$marca =$carro['marca'];
$velocidade_maxima = $carro['velocidade_max'];

echo "<br> O carro é da marca $marca e atinge no máximo 
$velocidade_maxima km/h";

/*crie um array com as seguintes características de uma pessoa:
nome, idade, profissão, graduação.
checando se ela é maior de idade e imprima
a mensagem informando.
*/

$pessoa = [
    'nome' => 'Mateus',
    'idade' => 25,
    'profissao' => 'programador',
    'graduacao' => 'sistemas de informacao'
];

if($pessoa['idade'] >= 18){
    echo "<br> A pessoa é maior de idade";
} else
    echo "<br> A pessoa é menor de idade";


?>