<?php

    $dbHost = 'localHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-aulla';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "conexão efeituada com suscesso"
    }
?>