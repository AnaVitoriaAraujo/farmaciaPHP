<?php
namespace POO\FarmaciaPHP\modelo;

class farmacia{
    public string $nome;
    public int $RG;
    public string $telefone;
    public string $listPlano;
    public string $listFarm;

    public function __construct( string $nome,int $RG, string $telefone, string $listPlano, string $listFarm){
        $this->nome = $nome;
        $this->RG = $RG;
        $this->telefone = $telefone;
        $this->listPlano = $listPlano;
        $this->listFarm = $listFarm;
        
    }//fim do contrutor

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function getRG():int{
        return $this->RG;
    }//fim do RG

    public function setRG(int $RG):void
    {
        $this->RG =  $RG;
    }

    public function getTelefone():string{
        return $this->telefone;
    }

    public function setTelefone(string $Telefone):void{
        $this->telefone = $telefone;
    }

    public function getlistPlano():string{
        return $this->listPlano;
    }

    public function setlistPlano():string{

        $this->listPlano = $listPlano;
    }
    public function getlistFarm():string{
        return $this->listFarm;
    }

    public function setlistFarm():string{

        $this->listFarm = $listFarm;
    }
}
?>