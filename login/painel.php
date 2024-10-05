<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php'); // Redirecionar para login se não autenticado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>
