<?php

class Personagem{
    protected string $nome;
    protected int $vida;
    protected int $defesa;
    protected int $golpe;

    public function __construct(int $v, int $d){
        $this->vida = $v;
        $this->defesa = $d;
    }

    public function sorteiaDanoGolpe(){
        $sorteio = rand(0, $this->golpe);
        return $sorteio;
    }

    public function batalhar(){
        $batalha = $this->vida; //continuar
    }

    public function defender(){
        if($this->vida < 80){
            $de = $this->defesa - ($this->defesa / 0.20);
            return $de;

        }else if($this->vida < 60){
            $de = $this->defesa - ($this->defesa / 0.40);
            return $de;

        }else if($this->vida < 40){
            $de = $this->defesa - ($this->defesa / 0.60);
            return $de;
        }
    }

    


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of vida
     */
    public function getVida(): int
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     */
    public function setVida(int $vida): self
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of defesa
     */
    public function getDefesa(): int
    {
        return $this->defesa;
    }

    /**
     * Set the value of defesa
     */
    public function setDefesa(int $defesa): self
    {
        $this->defesa = $defesa;

        return $this;
    }

    /**
     * Get the value of golpe
     */
    public function getGolpe(): int
    {
        return $this->golpe;
    }

    /**
     * Set the value of golpe
     */
    public function setGolpe(int $golpe): self
    {
        $this->golpe = $golpe;

        return $this;
    }
}