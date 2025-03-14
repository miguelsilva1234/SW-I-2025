<?php 
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "etec" and $password == "informatica")
    echo "logado com sucesso";
else
    echo "usuario ou senha errados"

?>