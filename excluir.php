<?php
include 'conexao.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
$stmt->execute([$id]);

    header("location: index.php");
    exit;
} 
?>