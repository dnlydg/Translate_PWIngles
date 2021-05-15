<?php
    $login = $_POST ['txtlogin'];
    $senha = $_POST ['txtsenha'];

    if(($login == 'adm') && ($senha == '123')){
        session_start();
        $_SESSION['loginSession'] = $login;
        $_SESSION['senhaSession'] = $senha;
        header("location: restrito/adm.php");
    }else{
        header("location: index.php");
    }
?>