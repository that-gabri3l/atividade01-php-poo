<?php

class Planta
{
    private $nome;
    private $especie;
    private $aguaPorDia;

    public function __construct($nome, $especie, $aguaPorDia)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function getAguaPorDia()
    {
        return $this->aguaPorDia;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    public function setAguaPorDia($aguaPorDia)
    {
        $this->aguaPorDia = $aguaPorDia;
    }

    public function calcularAguaSemanal()
    {
        return $this->aguaPorDia * 7;
    }
}