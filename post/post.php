<div class="titulo"> POST - Operação Lógica </div>

<form action = "#" method = "post">
    <div>
        <label for = "t1" >Trabalho 1 (Terça): </label>
        <select name= "t1" id = "t1">
            <option value="1"> Executado </option>
            <option value="0"> Não Executado </option>
        <select>
    </div>             
    <div>
        <label for = "t2" >Trabalho 2 (Quinta): </label>
        <select name= "t2" id = "t2">
            <option value="1"> Executado </option>
            <option value="0"> Não Executado </option>
        <select>
    </div>     

    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 20px;
    }
</style>

<?php

 if(isset($_POST["t1"]) && isset($_POST["t2"]) ){
     $t1 =$_POST['t1'] == '1';  //inclui valor 1 ou 0
     $t2  = !!$_POST['t2'];   //Utilizando dupla negação ("não muda nada")
    $tv = "";  //inicia vazio (depende da condição cumprida)
    $sorvete = false;   
 }

 if($t1 AND $t2){ //se t1 e t2 for verdade = '1'
    $tv = '50'; //atribui dentro da variável TV o valor 50
 }elseif ($t1 XOR $t2){ // se t1 ou t2 for verdade = '1'
    $tv = '32';
 }

 if ($t1 || $t2){
    $sorvete = true;
 }

 if ($tv){
    $resultado = "Vamor ganhar uma tv de $tv polegadas";
 }else {
    $resultado = "Sem TV dessa vez :( ";
 }

 if ($sorvete){
    $resultado .= '<br> Estamos mais saúdaveis \o/';

 }
 echo "<p> $resultado </p>";

?>