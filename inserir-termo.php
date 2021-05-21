<?php

    require_once 'global.php';
    
    try{
        /* 
        $stmt = $conexao->prepare('INSERT INTO tbtermo(nomeTermo, descTermo)
                                    VALUES (?,?)');
        $stmt->bindParam(1, $nomeTermo);
        $stmt->bindParam(2, $descTermo);
        $stmt->execute();
        */
        header("Location: restrito/adm.php");
        $termo = new Termo();
        $termo->setNomeTermo($_POST['txtNome']);
        $termo->setDescTermo($_POST['txtTermo']);
        echo $termo->inserir($termo);
    }
    catch(Exception $e){
        echo 'Erro: '.$e->getMessage();
    }

?>