<?php
    $drive="mysql";
    $hostname="localhost";
    $username="root";
    $password="admin1234";
    $dbname="";
    try{
        $conn=new PDO("$drive:host=$hostname;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $erro){
        echo "ERRO: ".$erro->getMessage();
    }