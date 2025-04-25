<?php
    include_once "Pessoa.class.php";

    //intasciar um objeto
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    //Atribuir um valor
    $pessoa1->Nome = 'Miguel';
    $pessoa1->Peso = 70;
    $pessoa1->Altura = 1.80;

    $pessoa2->Nome = 'Pietro';
    $pessoa2->Peso = 63;
    $pessoa2->Altura = 1.70;

    //chamando um metodo da classe pessoa
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();

?>