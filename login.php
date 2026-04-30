<?php
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["usuario"];
    $pass = $_POST["password"];

    if ($user == "24160793@itoaxaca.edu.mx" && $pass == "24160793TSO") {
        header("Location: gestion.php");
        exit();
    } else {
        $error = "Acceso denegado. Verifica tus credenciales.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Administrativo - TONY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="login-container">
        <div class="card login-card">
            <h2 class="text-blue">Panel de Gestión</h2>
            <form action="login.php" method="POST">
                <input type="email" name="usuario" placeholder="tunumcontrol@itoaxaca.edu.mx" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Entrar" class="btn btn-blue">
            </form>
            <?php if($error != ""): ?>
                <p class="error-msg"><?= $error ?></p>
            <?php endif; ?>
            <br>
            <a href="index.php" style="font-size: 0.8rem;">Volver al inicio</a>
        </div>
    </div>
</body>
</html>