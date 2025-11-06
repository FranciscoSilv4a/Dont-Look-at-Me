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
    dicaContainer.style.display = "flex";
}
function closeDicas() {
    let dicaContainer = document.querySelector(".dicaContainer");
    dicaContainer.style.display = "none";
}
// áudios
if(window.location == 'localhost/Dont-Look-at-Me/lvl3.php') {
    document.querySelector(".dica").addEventListener('onmouseover', () => {
        document.querySelector(".audioPlayer").play();
    });
}