<?php

require_once("Personagem.php");

class Mago extends Personagem{
    private $nomeGolpeMagia;

    public function getDadosGolpe(){
        $dado = "O mago " . $this->nome . " lançou o ataque mágico " . $this->golpe . ", que deu " . $this->sorteiaDanoGolpe() . " e está com " . $this->vida . "\n";
        return $dado;
    }

        public function getDadosDefesa(){
        $dado = "O mago " . $this->nome . " se defendeu com  " . $this->defender() . " de defesa e está com " . $this->vida . "\n";
        return $dado;
    }
}