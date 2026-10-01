<?php

require_once("Personagem.php");

class Mago extends Personagem{
    protected int $mana;

    public function __construct(int $v, int $m){
        parent::__construct($v);
        $this->mana = $m;
    }

    public function atacar(Personagem $adversario){

        $dano = $this->sorteiaDanoGolpe();
        $adversario->setVida(
            $adversario->getVida() - $dano
        );

        if($this->mana > 5){
            $this->mana -= 5;
            return $this->sorteiaDanoGolpe();

        } else {
            print "O mago não tem mana suficiente!\n";
            return 0;
        }

    }
    

    /**
     * Get the value of mana
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     */
    public function setMana(int $mana): self
    {
        $this->mana = $mana;

        return $this;
    }
}