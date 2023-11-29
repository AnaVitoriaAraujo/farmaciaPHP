<?php
    //Classe Cadastro
    class Cadastro
    {
        //Declaração de Variaveis
        private string $nome;
        private int $RG;
        private string $telefone;
        private int $listPlano;
        private int $listFarm;

        public function __construct($nome, $RG, $telefone)
        {
            $this->setNome($nome);
            $this->setRG($RG);
            $this->setEndereco($telefone);
            $this->setPlano($listPlano);
            $this->setFarm($listFarm);
        }//Fim do Construtor

        //Métodos consultores e de consulta

        public function getNome()
        {
            return $this->nome;
        }//Fim do Método

        public function getRG()
        {
            return $this->RG;
        }//Fim do Método

        public function getTelefone()
        {
            return $this->telefone;
        }//Fim do Método

        public function getPlano()
        {
            return $this->listPlano;
        }//Fim do Método

        public function getFarm()
        {
            return $this->listFarm;
        }//Fim do Método



        //Fim dos Gets
        //--------------------------

        public function setNome($nome)
        {
            $this->nome = $nome;
        }//Fim do Método

        public function setRG($RG)
        {
            $this->RG = $RG;
        }//Fim do Método

        public function setTelefone($telefone)
        {
            $this->endereco = $endereco;
        }//Fim do Método

        public function setPlano($listPlano)
        {
            $this->listPlano = $listPlano;
        }//Fim do Método

        public function setFarm($listFarm)
        {
            $this->listFarm = $listFarm;
        }//Fim do Método



        //Fim dos Sets
        //----------------------------

        public function imprimir()
        {
            $msg = "\n\nCPF: ".$this->getNome(). 
                    "\nNome: ".$this->getRG(). 
                    "\nTelefone: ".$this->getTelefone(). 
                    "\nEndereco: ".$this->getPlano(). 
                    "\nCidade: ".$this->getFarm();
            return $msg;
        }//Fim do Metodo
    }//Fim da Classe
//Fim do Projeto
?>