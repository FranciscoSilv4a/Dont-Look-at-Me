<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nível 1</title>
    <link rel="stylesheet" href="style/lvl1.css">
    <script defer src="js/lvl1.js.js"></script>
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 1</div>
        <p class="txt">
            Esta criatura aparenta estar calma, refletindo sobre sua própria existência. Entretanto, mantenha distância 
            não sabemos que tipos de vírus e patógenos, mesmo as mais inofensivas anomalias, podem carregar.
             O que está a sua frente 
            se classifica como uma CRIATURA ANÔMALA NEUTRA.
        </p>
    </div>
    <div class="btnContainer">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" onmouseover="pointerHand()" onmouseout="normalHand()">a) Esqueleto solitário</button>
        <button class="btn" id="btnB" onmouseover="pointerHand()" onmouseout="normalHand()">b) Nietzsche ressucitado</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">c) Seu eu verdadeiro</button>
        <button class="btn" id="btnC" onmouseover="pointerHand()" onmouseout="normalHand()">d) Senhor dos mares</button>
        <div class="dica" onmouseover="pointerHand()" onmouseout="normalHand()" onclick="openDicas()"></div>
    </div>
    <div class="dicaContainer">
        <div class="close" onmouseover="pointerHand()" onmouseout="normalHand()" onclick="closeDicas()"></div>
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
    <div class="inventario">
        <div class="itemInventario" id="item1"></div>
        <div class="itemInventario" id="item2"></div>
        <div class="itemInventario" id="item3"></div>
        <div class="itemInventario" id="item4"></div>
        <div class="itemInventario" id="item5"></div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>