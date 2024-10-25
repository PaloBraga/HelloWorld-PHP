<?php

session_start();
session_destroy(); // Destruir a sessão
header('Location: login.php'); // Redirecionar para a tela de login
exit();

?>
