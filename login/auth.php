<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

// Substitua pelo seu próprio método de validação
function validar_usuario($username, $password) {
    // Exemplo de usuários hardcoded (substitua por banco de dados)
    $usuarios = [
        'admin' => 'senha123',
        'usuario' => 'senha456'
    ];
    
    return isset($usuarios[$username]) && $usuarios[$username] === $password;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validar_usuario($username, $password)) {
        $_SESSION['usuario'] = $username;
        header('Location: painel.php'); // Redirecionar para o painel
        exit();
    } else {
        echo "<p>Usuário ou senha inválidos!</p>";
    }
}
?>
    
    </body>
</html>
