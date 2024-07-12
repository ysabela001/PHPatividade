<div class="titulo"> POST - Exercício </div>



<form action="#" method = "post">
    Número 1: <input type = "number" name = "number1"/> <br/>
    Número 2: <input type = "number" name = "number2"/> <br/>
    Número 3: <input type = "number" name = "number3"/> <br/>
    Número 4: <input type = "number" name = "number4"/> <br/>
    Número 5: <input type = "number" name = "number5"/> <br/>
    <input type="submit" name = "submit" value="Validar" />
</form>

<?php

    $n1 = $_POST['number1'];
    $n2 = $_POST['number2'];
    $n3 = $_POST['number3'];
    $n4 = $_POST['number4'];
    $n5 = $_POST['number5'];

    if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4 && $n1 > $n5){
        echo "<br>O número $n1 é o maior";
    }else if($n2 > $n1 && $n2 > $n3 && $n2 > $n4 && $n2 > $n5){
       echo "<br>O número $n2 é o maior";
    }else if($n3 > $n1 && $n3 > $n2 && $n3 > $n4 && $n3 > $n5){
        echo "<br>O número $n3 é o maioer";
    }else if($n4 > $n1 && $n4 > $n2 && $n4 > $n3 && $n4 > $n5){
        echo "<br>O número $n4 é o maior";
    }else if($n5 > $n1 && $n5 > $n2 && $n5 > $n3 && $n5 > $n4){
        echo "<br>O número $n5 é o maior";
    }else{
        echo "<br>Nenhum dos números digitados é o maior";
    }

    $soma = $n1 + $n2 + $n3 + $n4 + $n5;
    echo "<br> A soma dos números é igual a: $soma";

    $media = $soma / 5;
    echo "<br> A média é igual a: $media";





   

    

    
    