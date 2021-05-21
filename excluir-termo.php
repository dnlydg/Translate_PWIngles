<?php

    require_once 'global.php';
    require_once 'classes/Conexao.php';

    header("Location: restrito/adm.php");
        
    $id = $_GET['idTermo'];
    
    try{
        
        $conexao = Conexao::conectar();
        $queryDelete = "DELETE FROM tbtermo WHERE idTermo = $id";
        $conexao->query($queryDelete);
        /*
        $stmt = $conexao->prepare("UPDATE tbtermo SET nomeTermo = '$nome', descTermo = '$desc' WHERE idTermo = $id");
        $stmt->execute();
        */
    }
    catch(Exception $e){
        echo 'Erro: '.$e->getMessage();
    }

?>