<?php
    $dsn = 'mysql:host =sql1.njit.edu;dbname=br229';
    $username = 'br229';
    $password = '1Rm2Gizav';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>