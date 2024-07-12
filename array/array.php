<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, "texto");

var_dump($lista); //imprime o tipo, índice e conteúdo da lista
echo '<br>';
print_r($lista); // imprime só o conteúdo do array
echo '<br>';
print_r($lista[2]); //imprime conteúdo do indice 2 

// print_r($lista[100]); erro pois o indice 100 não existe

$lista[0] = 1234; //mudando o conteudo de um indice
echo '<br>';
print_r($lista);

$dados = array (
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
echo '<br>';
print_r($dados);
echo '<br>';
echo $dados["idade"];
?>
