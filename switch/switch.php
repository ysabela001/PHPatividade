<div class="titulo">Switch</div>

<?php

/*
Considere 3 variáveis: categoria, preço, carro.

o carro da categoria Luxo é Mercedes e o preço é 25000
o carro da categoria SUV é Renegade e o preço é 80000
o carro da categoria Sedan é Etios e o preço é 55000

Se não for nenhuma das categorias anteriores, o carro é
um Mobi e o preço é 33000;

Resolva fazendo if/else e depois resolva fazendo um switch.

*/

/*
$categoria ='oi';
$preco;
$carro;

if ($categoria == 'Luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria == 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria == 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format ($preco, 2, ',', '.');
echo "Carro: $carro<br> Preço: R$ $precoFormatado";

*/
$categoria = 'SUV';

switch ($categoria){
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    
    case 'SUV':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "Carro: $carro <br> Preço: $precoFormatado";


?>

