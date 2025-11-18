<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nível 2</title>
    <link rel="stylesheet" href="style/lvl5.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 2</div>
        <p class="txt">
            Sentimos muito soldado, este é o epicentro de tudo. Isso na sua frente é o próprio Lúcifer, que emergiu das profundezas 
            do inferno há alguns minutos. Ele não se esconde mais, não finge ser bom. Não podemos fazer mais nada, morra com honra, 
            estamos gratos em servir com você. Foi a missão mais promissora de todas.
        </p>
    </div>
    <div class="btnContainer">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA">a) Ajoelhar-se</button>
        <button class="btn" id="btnB">b) Cometer suicídio</button>
        <button class="btn" id="btnC">c) Crer em Deus</button>
        <button class="btn" id="btnD">d) Lutar</button>
        <div class="dica"></div>
    </div>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) Armas não o machucarão.
        </p>
        <p class="txt">
            2) Ajoelhar não poupa sua alma.
        </p>
        <p class="txt">
            3) Se matar é orgulho.
        </p>
    </div>
    <div class="imgBlack"></div>
    <div class="bloodContainer">
        <p class="title" id="gameOver">Score: 500</p>
        <button class="btn" id="restartBtn">Recomeçar</button>
    </div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>