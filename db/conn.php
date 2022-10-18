<?php
    // Development Connection
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn =  "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo =new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PRO::ERRMODE_EXCEPTION);
        //echo 'Hello Database';
    } catch(PDOException $e){
        //echo "<h1 class='text-danger'>No Datebase Found</h1>";
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>