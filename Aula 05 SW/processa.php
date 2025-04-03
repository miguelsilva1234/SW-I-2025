<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'Miguel123@gmail.com' && $senha == '112233') {
        $nome = "Miguel";
        header('Location: privada.php?nome='.$nome);
    }else {
        header('Location:erro.php');
    }