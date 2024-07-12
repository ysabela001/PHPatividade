<div class="titulo"> POST 3 </div>



<form action="#" method = "post">
    Login: <input type = "text" name = "login"/> <br/>
    Senha: <input type ="password" name = "password"/> <br/>
    Confirme a senha: <input type ="password" name = "repassword"/> <br/>
    <input type="submit" name = "submit" value="Validar" />
</form>

<?php

    $login = $_POST['login'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if ($login != $password && $repassword != $password) {
        echo 'Cadastro realizado com sucesso';
    }else{
        echo '[ERR0] Login é igual a senha ou as senhas não são iguais. Tente Novamente!';
    }


