<div class="titulo"> POST - Exercício </div>



<form action="#" method = "post">
   ci Coefiente A: <input type = "number" name = "number1"/> <br/>
    Coeficiente B: <input type = "number" name = "number2"/> <br/>
    Coeficiente C: <input type = "number" name = "number3"/> <br/>

    <input type="submit" name = "submit" value="Validar" />
</form>

<?php

    $A = $_POST['number1'];
    $B = $_POST['number2'];
    $C = $_POST['number3'];

    echo "A equação resulta em: " .equacao($A,$B,$c);

    funtion equacao($A,$B,$C){
        $delta = delta($A,$B,$C);

    if($delta == 0 )
        return "O delta possui duas raízes reais iguais";
    else if($A == 0)
        return "Não existe delta";
    else if($delta > 0)
        return "O delta possui duas raìzes reais distintas";
    else if($delta < 0)
        return "delta não possui raízes";
    else
        echo "[ERR0] insira os números corretamente";
    }

    function delta ($A,$B,$C){
        return ($B** - 4 *$A *$C);
    }


