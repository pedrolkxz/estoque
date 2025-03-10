<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $descricao = $_POST["nome"];
    $qunatidade = $_POST["nome"];
    $preco = $_POST["nome"];
    
    $stmt = $pdo->prepare("INSERT INTO produtos (pet,nome,descricao,quantidade,preco) VALUES (?,?,?,?");
    $stmt->execute([$nome,$descricao,$quantidade,$preco]);

    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tp-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrep.min.css">
</head>
<body class="conteiner mt-4">
    <h2>Adicionar Produto</h2>
    <form method="post">
        <div class="mb-3">
            <label> Nome:</label>    
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descrição:</label>
            <textarea name="decricao" class="form-control"></textarea>                
        </div>

        <div class="mb-3">
            <label> Quantidade:</label>    
            <input type="text" name="quantidade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label> Preço:</label>    
            <input type="text" name="preco" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-sucess">Salvar</button>
        <a href="js/bootstrap.mim.js"></a>

    </form>
    <script src="js/bootstrap.mim.js"></script>  
</body>
</html>
