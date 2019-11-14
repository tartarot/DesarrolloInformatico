<?php

    session_start();

    if(isset($_SESSION['user_codigo'])) {
        header('Location: /Login');
    }

    require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT codigo, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_codigo'] = $results['codigo'];
            header('Location: /Login');
        }
        else{
            $message = 'Estos datos no conciden';
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Login</title>
    </head>
    <body>

    <?php require 'partials/header.php' ?>

        <h1>Logeate</h1>
        <span> o <a href="registro.php">Registrate</a></span>

        <?php if (!empty($message)) : ?>
            <p><?= $message ?></p>
        <?php endif;?>

        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Ingresa tu mail">
            <input type="password" name="password" placeholder="Ingresa tu password">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>