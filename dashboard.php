<?php
session_start();

if(!isset($_SESSION['email'])){
    header ("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pr_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashaboard</title>
</head>
<body>
    <h1>Painel de Controle</h1>
    <p>Seja bem vindo<?php echo $email; ?> </p>

    <a href="logout.php">Sair</a>

    
</body>
</html>