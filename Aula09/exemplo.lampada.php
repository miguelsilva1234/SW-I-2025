<?php
    include_once 'Lampada.class.php';

    $Lamp1 = new Lampada();
    //var_dump($Lamp1); 
    $Lamp1->Fabricante = "Philips";  
    $Lamp1->Tensao = 110;  
    $Lamp1->Potencia = 50;  
    $Lamp1->Cor = "Branca";
    
    $Lamp1->MostrarDados();
    $Lamp1->Ligar();
    $Lamp1->MostrarDados();

?>