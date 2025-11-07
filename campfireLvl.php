<?php
    //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descanso</title>
    <link rel="stylesheet" href="style/campfireLvl.css">
    <script defer src="js/lvl2.js.js"></script>
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Descanso</div>
        <p class="txt">
            No caminho entre a pradaria em que você foi deixado ao retornar a esta dimensão, até a cidade, 
            seu próximo destino, uma família te oferece um lugar em torno de uma fogueira, um alento no meio 
            do apocalipse. Sua barriga roncava de fome, te acharam na hora certa.
        </p>
    </div>
    <div class="dialogoContainer">
        <p class="title">
            Você
        </p>
        <div class="next" onmouseover="pointerHand()" onmouseout="normalHand()" onclick="openDicas()"></div>
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
    <div class="bloodContainer">
        <p class="title" id="gameOver">Sua mente sucumbe</p>
    </div>
     <div class="inventario">
        <div class="itemInventario full" id="item1" onmouseover="pointerHand()" onmouseout="normalHand()">Walkie talkie</div>
        <div class="itemInventario" id="item2" onmouseover="pointerHand()" onmouseout="normalHand()">mudar no js--Artefato de argila</div>
        <div class="itemInventario" id="item3" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
        <div class="itemInventario" id="item4" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
        <div class="itemInventario" id="item5" onmouseover="pointerHand()" onmouseout="normalHand()"></div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>