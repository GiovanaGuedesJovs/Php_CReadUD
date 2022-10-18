<?php

class Conexao
{
    private $conexaoBD;

    public function getInstance(){
        $this->conexaoBD = new PDO("mysql:host=localhost:3300;dbname=escola","root","");
        return $this->conexaoBD;
    }
}