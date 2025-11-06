<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nível 3</title>
    <link rel="stylesheet" href="style/lvl3.css">
    <script defer src="js/lvl2.js.js"></script>
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 3</div>
        <p class="txt">
            Você foi transportado para uma dimensão anômala. Incontáveis olhos, a única parte do céu possível 
            de ser compreendida por sua limitada mente humana, te observam incansávelmente. eles veem sua alma, 
            seus pecados, e questionam: qual é o pecado primordial?
        </p>
    </div>
    <div class="btnContainer">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" onmouseover="pointerHand()" onmouseout="normalHand()">a) Gula</button>
        <button class="btn" id="btnB" onmouseover="pointerHand()" onmouseout="normalHand()">b) Orgulho</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">c) Avareza</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">d) Raiva</button>
        <div class="dica" onmouseover="pointerHand()" onmouseout="normalHand()" onclick="openDicas()"></div>
    </div>
    <div class="dicaContainer">
        <div class="close" onmouseover="pointerHand()" onmouseout="normalHand()" onclick="closeDicas()"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) Todos os pecados derivam deste.
        </p>
        <p class="txt">
            2) Primeiro pecado cometido por Lucifer.
        </p>
        <p class="txt">
            3) No fundo, todos possuímos.
        </p>
    </div>
    <div class="imgBlack" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
    <div class="bloodContainer">
        <p class="title" id="gameOver">Um olho se abre</p>
    </div>
    <div class="inventario">
        <div class="itemInventario full" id="item1" onmouseover="pointerHand()" onmouseout="normalHand()">Walkie talkie</div>
        <div class="itemInventario" id="item2" onmouseover="pointerHand()" onmouseout="normalHand()">mudar no js--Artefato de argila</div>
        <div class="itemInventario" id="item3" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
        <div class="itemInventario" id="item4" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
        <div class="itemInventario" id="item5" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
    </div>
    <audio class = "audioPlayer" controls loop>
        <source src="music/schizoVoices.mp3">
    </audio>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>