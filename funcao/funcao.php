<div class="titulo"> FUNÇÂO </div>

<?php

//definição de função

function imprimirMensagens(){
    echo "Olá<br>";
}

//invocar a função
imprimirMensagens();

$variavel = 1;
function trocaValor(){
    $variavel = 2;
    echo "Durante a função $variavel <br>";
}
 
echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocarValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>"
}

echo "Antes: $variavel <br>";
trocarValorDeVerdade();
echo "Depois $variavel <br>";

echo "<hr>";

function obterMensagem (){
    return "Seja Bem Vindo!";

}
echo obterMensagem();
$m = obterMensagem();

echo "<br> $m";

function obterMensagem($nome){
    return "Bem vindo, {$nome}";

}

echo "<br>" .obterMensagemComNome("Jesus Cristo");

function soma ($num, $num2){
    return $num + $um2;
}

echo "A soma é:" soma(10,20)
?>