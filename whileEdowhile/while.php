<form action = "#" method ="post">
    Tabuada do: <input type = "text" name = "tab" /> <br/>
    <input type = "submit" name = "submit" value = "Testar" /> <br>
</form>

<?php
echo "<hr> DO WHILE";
$tabuada = $_POST['tab'];
$count = 1;

do{
    echo $tabuada. " X " . $count ." = " .($tabuada * $count). "<br>";
    $count++;
}while ($count <= 10);


/*
     echo "<hr> WHILE";

$rabuada = $_POST['tab'];
$count = 1;

while ($count <= 10){
    echo $tabuada. " X " . $count ." = " .($tabuada * $count). "<br>";
    $count++;
}
*/
?>

