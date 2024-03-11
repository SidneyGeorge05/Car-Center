<?php

    require_once "../models/Conexao.php";

    class Cliente{
        private int $idCliente;
        private String $nomeCliente;
        private String $cpfCliente;
        private String $emailCliente;
        private String $senhaCliente;
        private String $logradouroCliente;
        private Int $numLogCliente;
        private String $compCliente;
        private String $bairroCliente;
        private String $cidadeCliente;
        private String $ufCliente;
        private String $cepCliente;
        private String $telefoneCliente;

        public function getIdCliente()
        {
            return $this->idCliente;
        }
        public function getNomeCliente()
        {
            return $this->nomeCliente;
        }
        public function getCpfCliente()
        {
            return $this->cpfCliente;
        }
        public function getEmailCliente()
        {
            return $this->emailCliente;
        }
        public function getSenhaCliente()
        {
            return $this->senhaCliente;
        }
        public function getLogradouroCliente()
        {
            return $this->logradouroCliente;
        }
        public function getNumLogCliente()
        {
            return $this->numLogCliente;
        }
        public function getCompCliente()
        {
            return $this->compCliente;
        }
        public function getBairroCliente()
        {
            return $this->bairroCliente;
        }
        public function getCidadeCliente()
        {
            return $this->cidadeCliente;
        }
        public function getUfCliente()
        {
            return $this->ufCliente;
        }
        public function getCepCliente()
        {
            return $this->cepCliente;
        }
        public function getTelefoneCliente()
        {
            return $this->telefoneCliente;
        }
        public function setIdCliente($idCliente)
        {
            $this->idCliente = $idCliente;
        }
        public function setNomeCliente($nomeCliente)
        {
            $this->nomeCliente = $nomeCliente;
        }
        public function setCpfCliente($cpfCliente)
        {
            $this->cpfCliente = $cpfCliente;
        }
        public function setEmailCliente($emailCliente)
        {
            $this->emailCliente = $emailCliente;
        }
        public function setSenhaCliente($senhaCliente)
        {
            $this->senhaCliente = $senhaCliente;
        }
        public function setLogradouroCliente($logradouroCliente)
        {
            $this->logradouroCliente = $logradouroCliente;
        }
        public function setNumLogCliente($numLogCliente)
        {
            $this->numLogCliente = $numLogCliente;
        }
        public function setCompCliente($compCliente)
        {
            $this->compCliente = $compCliente;
        }
        public function setBairroCliente($bairroCliente)
        {
            $this->bairroCliente = $bairroCliente;
        }
        public function setCidadeCliente($cidadeCliente)
        {
            $this->cidadeCliente = $cidadeCliente;
        }
        public function setUfCliente($ufCliente)
        {
            $this->ufCliente = $ufCliente;
        }
        public function setCepCliente($cepCliente)
        {
            $this->cepCliente = $cepCliente;
        }
        public function setTelefoneCliente($telefoneCliente)
        {
            $this->telefoneCliente = $telefoneCliente;
        }

        public static function cadastrar($cliente)
        {
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare("INSERT INTO tbcliente(nomeCliente, cpfCliente, emailCliente,
                                                            senhaCliente, logradouroCliente, numLogCliente, compCliente, 
                                                            bairroCliente, cidadeCliente, ufCliente, cepCliente, 
                                                            telefoneCliente)
                                                            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

            $prepareStatement->bindValue(1, $cliente->getNomeCliente());
            $prepareStatement->bindValue(2, $cliente->getCpfCliente());
            $prepareStatement->bindValue(3, $cliente->getEmailCliente());
            $prepareStatement->bindValue(4, $cliente->getSenhaCliente());
            $prepareStatement->bindValue(5, $cliente->getLogradouroCliente());
            $prepareStatement->bindValue(6, $cliente->getNumLogCliente());
            $prepareStatement->bindValue(7, $cliente->getCompCliente());
            $prepareStatement->bindValue(8, $cliente->getBairroCliente());
            $prepareStatement->bindValue(9, $cliente->getCidadeCliente());
            $prepareStatement->bindValue(10, $cliente->getUfCliente());
            $prepareStatement->bindValue(11, $cliente->getCepCliente());
            $prepareStatement->bindValue(12, $cliente->getTelefoneCliente());
            $prepareStatement->execute();
        }

        public static function deletar($cliente)
        {
            $conexao = Conexao::conectar();

            $queryDelete = ("DELETE FROM tbCliente WHERE idCliente = ?");

            $prepareStatement = $conexao->prepare($queryDelete);
            $prepareStatement->bindValue(1, $cliente->getIdCliente());

            $prepareStatement->execute();
        }

        public static function editar($cliente)
        {
            $conexao = Conexao::conectar();

            $queryUpdate = ("UPDATE tbCliente SET nomeCliente = ?, cpfCliente = ?, emailCliente = ?, senhaCliente = ?
                                    logradouroCliente = ?, numLogCliente = ?, compCliente = ?, bairroCliente = ?, cidadeCliente = ?
                                    ufCliente = ?, cepCliente = ?, telefoneCliente = ?");

            $prepareStatement = $conexao->prepare($queryUpdate);
            $prepareStatement->bindValue(1, $cliente->setNomeCliente());
            $prepareStatement->bindValue(2, $cliente->setCpfCliente());
            $prepareStatement->bindValue(3, $cliente->setEmailCliente());
            $prepareStatement->bindValue(4, $cliente->setSenhaCliente());
            $prepareStatement->bindValue(5, $cliente->setLogradouroCliente());
            $prepareStatement->bindValue(6, $cliente->setNumLogCliente());
            $prepareStatement->bindValue(7, $cliente->setCompCliente());
            $prepareStatement->bindValue(8, $cliente->setBairroCliente());
            $prepareStatement->bindValue(9, $cliente->setCidadeCliente());
            $prepareStatement->bindValue(10, $cliente->setUfCliente());
            $prepareStatement->bindValue(11, $cliente->setCepCliente());
            $prepareStatement->bindValue(12, $cliente->setTelefoneCliente());

            $prepareStatement->execute();
        }

        public static function listar()
        {
            $conexao = Conexao::conectar();

            $querySelect = ("SELECT idCliente, nomeCliente, cpfCliente, emailCliente, senhaCliente, logradouroCliente, numLogCliente, compCliente, bairroCliente, cidadeCliente, ufCliente, cepCliente, telefoneCliente FROM tbCliente");

            $result = $conexao->prepare($querySelect);
            $result->execute();
            $lista = $result->fetchAll();

            return $lista;
        }
    }
?>
