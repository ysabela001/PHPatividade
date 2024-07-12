<form action="#" method="post">
    Número 1: <input type="number" name="number1"/> <br/> 
    Número 2: <input type="number" name="number2"/> <br/>
    Número 3: <input type="number" name="number3"/> <br/>
    <input type="submit" name="submit" value="Validar" />
</form>

<?php

if(isset($_POST['submit'])== true){//verifica se houve interação no submit  
    
  $notas = array();
  for($i = 1; $i <= 3; $i++) {
  $nota = $_POST["number$i"];  // $i = indice    
  array_push($notas, $nota);  //adiciona o valor $nota(numero solicitado) na array notas
}  
 
 $mediaGeral = array_sum($notas) / 3;
 echo "A média geral do estudante é igual a: $mediaGeral<br>";

 if ($mediaGeral >= 6){
    echo "Estudante Aprovado(a)<br>";
 } else {
    echo "Estudante Reprovado(a)<br>"; 
}
}

#  array_sum() : é usada para calcular a soma de todos os valores em um array. No caso, $notas
?>
