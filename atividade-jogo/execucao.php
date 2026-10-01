<?php

require_once("modelo/Guerreiro.php");
require_once("modelo/Mago.php");

do{
    print "\n\n******* JOGAR *******\n";
    print "Escolha o personagem:\n\n";
    print "1-Mago\n";
    print "2-Guerreiro\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao: ");

    switch ($opcao) {
        case 1:
            print "\nMago...\n";
            
            $ma = new Mago(100, 60);
            $ma->setNome(readline("Informe o nome do mago: "));
            $ma->setNomeGolpe(readline("Informe o nome do golpe mágico: "));
            $ma->setGolpe(readline("Informe o valor do golpe: "));
            while ($ma->getGolpe() > 50 || $ma->getGolpe() < 10) {
                $ma->setGolpe(readline("Digite o valor entre 10 e 50: "));            
            }

            print "\nMago criado!\n";
            print "Nome: " . $ma->getNome() . "\n";
            print "Vida: " . $ma->getVida() . "\n";
            print "Mana: " . $ma->getMana() . "\n\n";

            $ad = new Guerreiro(100);
            $ad->setNome("Ludovica");
            $ad->setNomeGolpe("Dança das Lâminas");
            $ad->setGolpe(50);

            print "A sua adversária é a guerreira " . $ad->getNome() . ".\n\n\n";

            $ma->batalhar($ad);

            break;

        case 2:
            print "\nGuerreiro...\n";
            
            $gue = new Guerreiro(100);
            $gue->setNome(readline("Informe o nome do guerreiro: "));
            $gue->setNomeGolpe(readline("Informe o nome do golpe: "));
            $gue->setGolpe(readline("Informe o valor do golpe: "));
            while ($gue->getGolpe() > 50 || $gue->getGolpe() < 10) {
                $gue->setGolpe(readline("Digite o valor entre 10 e 50: "));
            }

            print "\nGuerreiro criado!\n";
            print "Nome: " . $gue->getNome() . "\n";
            print "Vida: " . $gue->getVida() . "\n\n";

            $ad = new Mago(100, 60);
            $ad->setNome("Morgana");
            $ad->setNomeGolpe("Pranto Glacial");
            $ad->setGolpe(50);

            print "A sua adversária é a maga " . $ad->getNome() . " com " . $ad->getVida() . " de vida.\n\n\n";

            $gue->batalhar($ad);

        break;

        case 0:
            print "Tchau, até a próxima batalha!\n";
        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }

}while ($opcao != 0);