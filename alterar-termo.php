<?php

    require_once 'global.php';
    require_once 'classes/Conexao.php';

    header("Location: restrito/adm.php");
        
    $id = $_POST['txtPegarID'];
    $nome = $_POST['txtNome'];
    $desc = $_POST['txtDesc'];
    
    
    try{
        
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("UPDATE tbtermo SET nomeTermo = '$nome', descTermo = '$desc' WHERE idTermo = $id");
        $stmt->execute();
    }
    catch(Exception $e){
        echo 'Erro: '.$e->getMessage();
    }

?>