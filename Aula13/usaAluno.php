<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Vinicius",5,8);

    $nota1 = $fulano->getNota1();
    $nota1 = $fulano->getNota2();
    $Nome = $fulano->getNome();
    
    //echo $nota2;
    
    $Nome = $fulano->getNome($nome);
    $media = $fulano->Media($nota1,$nota2);

     
    echo $fulano->getNome($nome);
    echo $fulano->verificarSituacao($media);

?>