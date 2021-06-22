<?php

    include_once('../global.php');
    include_once('sentinela.php');
    include_once('../classes/Termo.php');
    include_once('../classes/Conexao.php');

    $termo = new Termo();
    $lista = $termo->listar();
    foreach ($lista as $linha){
        $json = json_encode($lista, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
    echo $json;
    

?>