<?php

 $host = 'localhost';
 $port = 3306;
 $dbname = 'intern_management';
 
 $username = 'root';
 $password = '';
 
 $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";
 
 try {
     $pdo = new PDO($dsn,$username,$password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     
    
 } catch (PDOException $e) {
     echo 'Failed' . $e->getMessage();
 }

?>