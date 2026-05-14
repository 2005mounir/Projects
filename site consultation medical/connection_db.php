<?php
$host = 'localhost';
$dbname = 'medical_db';
$user = 'root';
$passowrd = "";
//$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
try{
   $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$passowrd);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    
} catch (PDOException $e) {
    echo 'you have erreur in : ' . $e->getMessage();
}
























?>