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

        public function deletar($idTermo){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("DELETE FROM tbtermo WHERE idTermo = ".$idTermo);
            $stmt->execute();
        }
    }

?>