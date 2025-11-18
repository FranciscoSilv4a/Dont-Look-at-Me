<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nível 2</title>
    <link rel="stylesheet" href="style/lvl2.css">
    <script defer src="js/lvl2.js.js"></script>
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 2</div>
        <p class="txt">
            A anomaia é circular. A pradaria em que você se encontra está repleta de uma presença 
            assustadora, algo te observa, algo muito AGRESSIVO. A brisa toca as árvores à sua frente, 
            balançando-as de forma calma. Você se sente ameaçado, mas o ambiente parece familiar.
        </p>
    </div>
    <div class="btnContainer">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" onmouseover="pointerHand()" onmouseout="normalHand()">a) Disco voador</button>
        <button class="btn" id="btnB" onmouseover="pointerHand()" onmouseout="normalHand()">b) Cabeça flutuante</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">c) Lua?</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">d) Buraco negro</button>
        <div class="dica"></div>
    </div>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) A anomalia não está viva, no sentido convencional.
        </p>
        <p class="txt">
            2) A criatura não é uma personificação do abstrato.
        </p>
        <p class="txt">
            3) O alvo não aparenta ter nenhuma autoridade sobre a natureza.
        </p>
    </div>
    <div class="imgBlack"></div>
    <div class="bloodContainer">
        <p class="title" id="gameOver">Sua mente sucumbe</p>
    </div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>