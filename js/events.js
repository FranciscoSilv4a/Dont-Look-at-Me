//  declaração de variáveis importantes
const btn = document.getElementsByClassName('.btn');

// animações da mão
function pointerHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handPointer.png')";
}
function normalHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handIcon.png')";
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
// áudios
    /*document.querySelector(".dica").addEventListener('onclick', () => {
        document.querySelector(".audioPlayer").play();
    });*/