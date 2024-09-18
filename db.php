<?php
$host = 'localhost';
$dbname = 'site_edicao';
$user = 'root';  // Usuário do MySQL
$password = '';  // Senha do MySQL (deixe vazio se não configurou senha)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
