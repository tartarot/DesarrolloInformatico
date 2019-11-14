<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if($stmt->execute()) {
            $message = 'Usuario creado satisfactoriamente';
        }
        else{
            $message = 'Ah ocurrido un error con su contraseña';
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Registro</title>
    </head>
    <body>
        <?php require 'partials/header.php' ?>

        <?php if(!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>

        <h1>Registrate</h1>
        <span> o <a href="login.php">logeate</a></span>

        <form action="registro.php" method="post">
            <input type="text" name="email" placeholder="Ingresa tu mail">
            <input type="password" name="password" placeholder="Ingresa tu password">
            <input type="password" name="confirmar_password" placeholder="Confirma tu password">
            <input type="submit" value="Enviar">
        </form>
    
    </body>
</html>