<?php

class Planta
{
    private string $nome;
    private string $especie;
    private int $aguaPorDia;

    public function __construct(string $nome, string $especie, int $aguaPorDia)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaPorDia = $aguaPorDia;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getAguaPorDia(): int
    {
        return $this->aguaPorDia;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEspecie(string $especie): void
    {
        $this->especie = $especie;
    }

    public function setAguaPorDia(int $aguaPorDia): void
    {
        $this->aguaPorDia = $aguaPorDia;
    }

    public function calcularAguaSemanal(): int
    {
        return $this->aguaPorDia * 7;
    }
}