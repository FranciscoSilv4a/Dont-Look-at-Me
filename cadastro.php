<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style/contas.css">
</head>
<body>
    <form class="mainContainer">
        <div class="title">Cadastro</div>
        <div class="contUser">
            <label for="nome" class="txt">Nome</label>
            <input type="text" name = "nome">

            <label for="senha" class="txt">Senha</label>
            <input type="password" name = "senha">
        </div>
        <button class="btn" id="btnHistoria">Cadastrar</button>
        <a href="login.php" class="txt">Já tenho cadastro</a>
        <p class="txt" id="error">Erro 404</p>
</form>
    <p class="version">Versão 0.01</p>
</body>
</html>