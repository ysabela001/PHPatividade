<div class="titulo"> POST - Exercícios </div>

<form action = "#" method = "post">
    Insira uma nota: <input type="number" name = "number"/> </br>
    <input type="submit" name = "submit" value = "inserir" />>
</form>   

<?php

$nota = $_POST["number"];

if ($nota <  0 || $nota >10){
    echo "Insira uma nota válida entre 0 a 10";  
}else{
    echo "Nota inserida com sucesso.";
}
?>