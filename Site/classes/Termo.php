<?php

    class Termo{
        private $idTermo;
        private $nomeTermo;
        private $descTermo;

        public function getIdTermo(){
            return $this->idTermo;
        }

        public function setIdTermo($idTermo){
            $this->idTermo = $idTermo;
        }

        public function getNomeTermo(){
            return $this->nomeTermo;
        }

        public function setNomeTermo($nomeTermo){
            $this->nomeTermo = $nomeTermo;
        }

        public function getDescTermo(){
            return $this->descTermo;
        }

        public function setDescTermo($descTermo){
            $this->descTermo = $descTermo;
        }

        public function inserir($termo){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbtermo (nomeTermo, descTermo)
                                        VALUES (?,?)");
            $stmt->bindParam(1, $termo->getNomeTermo());
            $stmt->bindParam(2, $termo->getDescTermo());
            $stmt->execute();
        }

        public function alterar($termo){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbtermo SET nomeTermo = '?', descTermo = '?' WHERE idTermo = ?");
            $stmt->bindParam(1, $termo->getNomeTermo());
            $stmt->bindParam(2, $termo->getDescTermo());
            $stmt->bindParam(3, $termo->getIdTermo());
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = 'SELECT idTermo, nomeTermo, descTermo FROM tbtermo';
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }

        public function deletar($idTermo){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("DELETE FROM tbtermo WHERE idTermo = ".$idTermo);
            $stmt->execute();
        }
    }

?>