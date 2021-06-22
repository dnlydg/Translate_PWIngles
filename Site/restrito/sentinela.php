<?php
    session_start();
    if(($_SESSION['loginSession'] != 'adm') || 
    ($_SESSION['senhaSession'] != '123')){
        header('location:../index.php');
    }
?>