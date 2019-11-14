<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'desarrolladoresinformaticos';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    }
    catch (PDOException $error){
        die('Connected failed: '.$error->getMessage());
    }
?>