<?php
include 'conexao.php';

 $smtt = $pdo_>query("SELECT * FRIM produtos");
 $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Controle de estoque</title>
</head>
<body>
    
</body>
</html>