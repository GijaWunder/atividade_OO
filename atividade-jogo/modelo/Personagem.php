<?php

class Personagem{
    protected string $nome;
    protected int $vida;
    protected int $golpe;
    protected string $nomeGolpe;

    public function __construct(int $v){
        $this->vida = $v;
    }

    public function sorteiaDanoGolpe(){
        $sorteio = rand(0, $this->golpe);
        return $sorteio;
    }


    public function batalhar(Personagem $adversario){
    
        do {
            $dano = $this->sorteiaDanoGolpe();
            $adversario->setVida($adversario->getVida() - $dano);

            $danoAd = $adversario->sorteiaDanoGolpe();
            $this->setVida($this->getVida() - $danoAd);        

                    print $this->nome . " atacou " . $adversario->getNome() . " e causou " . $dano . " de dano!\n";
                    print $adversario->getNome() . " ficou com " . $adversario->getVida() . " de vida.\n\n";

                    if ($adversario->getVida() <= 0) {
                        print $this->nome . " venceu a batalha!\n";
                        break;
                    }else if ($this->getVida() <= 0) {
                        print "Que pena. Você perdeu!\n";
                        break;
                    }

                    print $adversario->getNome() . " contra-atacou e deu " . $danoAd . " de dano.\n";
                    print $this->nome . " ficou com " . $this->getVida() . " de vida.\n\n";

                    if ($this->getVida() <= 0) {
                        print "Que pena. Você perdeu!\n";
                        break;
                    }else if ($adversario->getVida() <= 0) {
                        print $this->nome . " venceu a batalha!\n";
                        break;
                    }
           
                if ($this->continuar($adversario) == false) {
                    break;
                }
            
           

        } while ($this->getVida() > 0 && $adversario->getVida() > 0);
            

    }

    public function continuar(Personagem $ad){
        $res = readline("Deseja continuar a batalha? (s ou n) ");

        if ($res == "s") {
            return true;

        }else if($res == "n"){
            print "Que pena. Tchau!\n";
            return false;
        }else{
            while ($res != "s" && $res != "n") {
                $res = readline("Opçaão inválida! Informe novamente: ");
            }
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

    /**
     * Get the value of nomeGolpe
     */
    public function getNomeGolpe(): string
    {
        return $this->nomeGolpe;
    }

    /**
     * Set the value of nomeGolpe
     */
    public function setNomeGolpe(string $nomeGolpe): self
    {
        $this->nomeGolpe = $nomeGolpe;

        return $this;
    }
}