<?php
include 'db.php';
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit();
}

$statusMessage = ''; // Variável para armazenar a mensagem de status

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $novoConteudo = $_POST['sobre_nos'];

    // Atualizar o conteúdo no banco de dados
    $stmt = $pdo->prepare("UPDATE conteudo SET conteudo = ? WHERE secao = 'sobre_nos'");
    $stmt->execute([$novoConteudo]);

    $statusMessage = "Conteúdo atualizado com sucesso!";
}

// Buscar o conteúdo atual para exibir no formulário
$query = $pdo->query("SELECT conteudo FROM conteudo WHERE secao = 'sobre_nos'");
$sobreNos = $query->fetch(PDO::FETCH_ASSOC)['conteudo'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="icon" type="image/x-icon" href="img/Logo_Fabrica_Icone.png">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

    <h1>Painel Administrativo - Editar Conteúdo</h1>

    <form method="POST" action="admin.php">
        <label for="sobre_nos">Conteúdo de Sobre Nós:</label><br>
        <textarea name="sobre_nos" id="sobre_nos" rows="10" cols="50"><?php echo $sobreNos; ?></textarea><br><br>
        <input type="submit" value="Atualizar Conteúdo">

        <!-- Mensagem de alteração "Conteúdo atualizado com sucesso!" dentro do forms-->
        <?php
        if ($statusMessage):
        ?>
            <p style="color: black;"><?php echo $statusMessage; ?></p>

        <?php
        endif;
        ?>
    </form>

    <form action="logout.php" method="post">
        <button type="submit" class="logout-button">Logout</button>
    </form>

   <button class="botao-estilizado" onclick="window.location.href='index.php'">Ir para Exemplo</button>

</body>

</html>