<?php

    require_once 'global.php';
    $conexao = Conexao::conectar();
    if(isset($_POST['query'])){
        $userInput = $_POST['query'];
        $query = "SELECT nomeTermo FROM tbtermo WHERE nomeTermo LIKE '%$userInput%'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        if($resultado->rowCount()>0){
            foreach($lista as $linha){
                echo "<a href='termos.php' id='link-lista' class='list-group-item list-group-item-action border-1'>".$linha['nomeTermo']."</a>";
            }
        }
        else{
            echo "<p href='#' id='link-lista' class='list-group-item list-group-item-action'>Termo não cadastrado</p>";
        }
    }

?>