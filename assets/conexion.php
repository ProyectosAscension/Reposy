<?php
/*
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="pizzeria_asuncion";

    try{
        
        $conn=new PDO("mysql:host=$dbhost; dbname=$dbname;",$dbuser,$dbpass);
        echo 'conexion exitosa ';

    }catch(PDOException $error)
    {
        echo 'error c ';
        die('Connected Failed: '.$error->getMessage());
    }
    */
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="pizzeria_asuncion";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
?>