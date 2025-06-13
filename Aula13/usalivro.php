<?php
    include_once 'Livro.class.php';

    $livro = new Livro('Lusíadas','Camões',true);

    //echo "<pre>";
    //var_dump ($livro);
    //echo "</pre>";

    echo "MOSTRA O STATUS DE UM LIVRO <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";

    echo "REALIZANDO UM EMPRESTIMO <br>";
    $livro->Emprestar();
    echo "<hr>";

    echo "MOSTRA O STATUS DE UM LIVRO <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";

    //echo "REALIZANDO UM EMPRESTIMO <br>";
    //$livro->Emprestar();
    //echo "<hr>";

    echo "DEVOLVENDO UM LIVRO <br>";
    $livro->Devolver();
    echo "<hr>";

    echo "MOSTRA O STATUS DE UM LIVRO <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";

?>