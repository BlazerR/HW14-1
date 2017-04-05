<?php
    $dsn = 'mysql:host =sql1.njit.edu;dbname=br229';
    $username = 'br229';
    $password = 'CHULA1616';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>