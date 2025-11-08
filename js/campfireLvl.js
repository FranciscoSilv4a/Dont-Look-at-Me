// EVENTOS PARA A FOGUEIRA
// animações da mão
function pointerHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handPointerFire.png')";
}
function normalHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handIconFire.png')";
}

// abrir e fechar a aba de dicas
function openDicas() {
    let dicaContainer = document.querySelector(".dicaContainer");
    let audio1 = document.querySelector("#audio1");
    let audio2 = document.querySelector("#audio2");
    dicaContainer.style.display = "flex";
    audio1.play();
    audio2.play();
}
function closeDicas() {
    let dicaContainer = document.querySelector(".dicaContainer");
    dicaContainer.style.display = "none";
}
// trocar diálogo
const nextDialog = () => {
    const dialog1 = document.getElementById('dialog1');
    const dialog2 = document.getElementById('dialog2');
    const dialog3 = document.getElementById('dialog3');
    const dialog4 = document.getElementById('dialog4');
    if(dialog1.style.color == '#ffc35a') {
        dialog1.style.color = 'transparent';
        dialog2.style.color = '#ffc35a';
    }
    else if(dialog2.style.color == '#ffc35a') {
        dialog2.style.color = 'transparent';
        dialog3.style.color = '#ffc35a';
    }
    else {
        dialog3.style.color = 'transparent';
        dialog4.style.color = '#ffc35a';
    }
}

// eventos inventário => talvez tenha q fazer um arquivo de eventos de inventário para cada nível, por causa do tanto de if
const item1 = document.getElementById('item1');
item1.addEventListener('onmouseover', () => {
    let nomeItem = document.querySelector('.nomeItem');
    nomeItem.style.color = "white";
}); //  fazer isso funcionar