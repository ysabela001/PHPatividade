<div class='titulo'>Exercício Operadores</div>

<?php
/*
Crie uma variável que receba idade e sexo.


Utilizando os operadores lógicos e relacionais, faça o teste conforme abaixo:
Se a idade for maior que 60 e o sexo for feminino imprima o sexo e diga que 
pode se aposentar.
Se a idade for maior ou igual a 65 e o sexo for masculino, pode se aposentar.
Senão terá que trabalhar mais um pouco.


*/
/*
$idade = 65;
$sexo = 'M';

if($idade >= 60 && $sexo =='F'){
    echo "Pode se aposentar --> $sexo";
} elseif ($idade >=65 && $sexo =='M'){
    echo "Pode se aposentar --> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco";
}
*/

/*$idade = 65;
$sexo = 'M';
$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo ==='M');
$criterioMulher = ($idade >= 60 && $sexo ==='F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;


echo "Pode se aposentar --> $podeSeAposentar .<br>";
*/

$idade = 70;
$status;

if ($idade >=18){
    $status = 'Maior de Idade';
} else {
    $staus = 'Menor de Idade';
}

echo "$status <br> ";

//operador ternário

$idade = 17;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';

echo $status;

?>