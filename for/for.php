<div class="titulo"> Laço For </div>

<form action = "#" method ="post">
    Tabuada do: <input type = "text" name = "tab" /> <br/>
    <input type = "submit" name = "submit" value = "Testar" /> <br>
</form>

<?php

$tabuada = $_POST['tab'];

for ($count = 1; $count <= 10; $count++){
    echo $tabuada. " X " . $count ." = " .($tabuada * $count). "<br>";
}




/*
for ($count = 1; $count <= 5; $count ++) {    #count = contador em inglês
    echo "$count <br>";
}

echo "<hr>";  #hr = cria linha
for(; $count <= 10 ; $count ++){    //pega o valor da variavel (count) "que parou no 5 e continua até o 10
    echo "$count <br>";
}

echo "<hr>";

$array =['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

for($i = 0; $i < count($array); $i ++) {
    echo " {$array[$i]} <br>";
}

*/





?>