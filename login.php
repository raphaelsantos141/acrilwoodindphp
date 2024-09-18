<ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['logado']) && $_SESSION['logado']): ?>
              <li><a href="logout.php" class="btn btn-default">Logout</a></li>
            <?php else: ?>
              <li><a href="login.php" class="btn btn-default" id="loginButton">Login</a></li>
            <?php endif; ?>
          </ul>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login Administrativo</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="img/Logo_Fabrica_Icone.png">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="page">
        <form method="POST" class="formLogin" action="login.php">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>

            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" placeholder="Digite seu usuário" autofocus="true" />

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" />

            <a href="#">Esqueci minha senha</a>

            <input type="submit" value="Entrar" class="btn" />

            <input type="button" value="Voltar ao site" class="btn" onclick="window.location.href='index.php';" />

            <?php
            include 'db.php';
            session_start();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = md5($_POST['password']);  // Criptografando a senha

                $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
                $stmt->execute([$username, $password]);
                $user = $stmt->fetch();

                if ($user) {
                    $_SESSION['logado'] = true;
                    header('Location: admin.php');
                } else {
                    echo "Login ou senha inválidos!";
                }
            }
            ?>
            
        </form>
        <img src="img/Logo_Fabrica_White.png" class="Logo acrilwood ind." width="800" height="100">
    </div>

</body>

</html>