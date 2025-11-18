<?php
    //$date = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style/index.css">
    <script defer src="js/index.js"></script>
</head>
<body>
    <form class="mainContainer">
        <div class="logo"></div>
        <p class="txt">Usuário</p>
        <div class="contUser">
            <button class="btn" id="btnLogin"><a href="login.php"><span>Logar</span></a></button>
            <button class="btn" id="btnCadastro"><a href="cadastro.php"><span>Cadastrar</span></a></button>
        </div>
        <button class="btn" id="btnJogar">Jogar</button>
        <button class="btn" id="btnPlacar"><a href="placar.php"><span>Placar</span></a></button>
        <button class="btn" id="btnHistoria"><a href="story.php"><span>História</span></a></button>
        <p class="txt" id="error">Erro 404</p>
    </form>
    <p class="version">Versão 0.01</p>
</body>
</html>