<?php
$host = 'localhost';
$dbname = 'password_manager';
$user = 'root'; // Ajuste conforme seu ambiente
$pass = 'nm12345678';     // Senha do MySQL local

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>