<?php

    require_once 'global.php';

    try{
        header("Location: ");
        $termo = new Termo();
        $termo->setNomeTermo($_POST['']);
        $termo->setDescTermo($_POST['']);
        echo $termo->inserir($termo);
    }
    catch(Exception $e){
        echo 'Erro: '.$e->getMessage();
    }

?>