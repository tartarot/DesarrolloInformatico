<?php

    session_start();

    require 'database.php';

    if (isset($_SESSION['user_codigo'])) {
        $records = $conn->prepare('SELECT codigo, email, password FROM users WHERE codigo = :codigo');
        $records->bindParam(':codigo', $_SESSION['user_codigo']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Bienvenido a la App</title>
    </head>
    <body>

        <?php require 'partials/header.php' ?>

        <?php if (!empty($user)): ?>
            <br>Bienvenido. <?= $user['email'] ?>
            <br>Tu estas Registrado
            <a href="logout.php">Deslogeado</a>
        <?php else: ?>
            <h1>Porfavor logeate o Registrate</h1>
        
            <a href="login.php">Login</a> o
            <a href="registro.php">Registrarse</a>
        <?php endif; ?>

    </body>
</html>