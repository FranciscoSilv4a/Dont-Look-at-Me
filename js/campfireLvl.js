// EVENTOS PARA A FOGUEIRA
document.querySelector('.itemInventario').addEventListener('onmouseover', pointerHand());
document.querySelector('.itemInventario').addEventListener('onmouseout', normalHand());
// animações da mão
function pointerHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handPointerFire.png')";
}
function normalHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handIconFire.png')";
}
// trocar diálogo
const nextDialog = () => {
    console.log(document.getElementById('dialog1').style.getPropertyValue('color'));
}
// eventos inventário => talvez tenha q fazer um arquivo de eventos de inventário para cada nível, por causa do tanto de if

const mostrarNome = () => {
    let nomeItem = document.querySelector('.nomeItem');
    nomeItem.style.color = "white";
} //  fazer isso funcionar => Só era limpar o código KKKKKKKKKKKKKKKKKKKKKK