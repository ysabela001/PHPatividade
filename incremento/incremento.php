<div class='titulo'>Incremento</div>

<?php

$preco = 100;

    echo "O preço do produto é R$: $preco <br>";

//$preco = $preco - ($preco*10/100);
$preco += ($preco*10/100);

//adicao +=
//subtracao -=
//multiplicacao *=
//divisao /=
//modelo %=



echo "O novíssimo preço com 10% de desconto será R$: $preco";
?>