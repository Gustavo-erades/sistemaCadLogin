<?php
    $dsn="mysql:host=localhost;dbname=bancoDeDados";
    $username="root";
    $password="admin1234";
    try{
        $conn=new PDO($dsn,$username,$password);
    }catch(Exception $erro){
        echo "ERRO! <br> Código: ".$erro->getCode()."<br> Mensagem: ".$erro->getMessage();
    }