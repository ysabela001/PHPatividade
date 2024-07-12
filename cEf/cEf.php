<div class="titulo"> Fahrenheit e Celsius </div>

<div>
        <label for = "t1" >Selecione a opção desejada: </label>
        <select name= "t1" id = "t1">
            <option value="1"> Fahrenheit </option>
            <option value="0"> Celsius </option>
        <select>
        Digite a temperatura: <input type = "number" name = "number1"/> <br/>
    </div>             
    <input type="submit" name = "submit" value="Validar" />
</form>

<?php

$opcaoEscolhida = $_POST['t1'];
$opcaotemperatura= $_POST['number1'];
 

if($opcaoEscolhida == 1)
  return fparaCelsius($opcaotemperatura);
 
else if ($opcaoEscolhida == 0)
  return cparaFahrenheit($opcaotemperatura);
  
function fparaCelsius(){
    $resultado = ($opcaotemperatura - 32)/1.8
    return "A temperatura é igual a: $resultado <br>"
}

function cparaFahrenheit(){
    $resultado2 = ($opcaotemperatura * 1.8) + 32
    return "A temperatura é igual a: $resultado2 <br>"
}
?>
