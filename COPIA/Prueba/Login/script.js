const phrases = [
    "Bienvenido...",
    "Ingrese sus credenciales",
    "Iniciar sesión..."
];
let currentPhraseIndex = 0;
let currentCharacterIndex = 0;
const textElement = document.getElementById('animated-text');

function type() {
    if (currentCharacterIndex < phrases[currentPhraseIndex].length) {
        textElement.textContent += phrases[currentPhraseIndex].charAt(currentCharacterIndex);
        currentCharacterIndex++;
        setTimeout(type, 150);
    } else {
        setTimeout(erase, 2000);
    }
}

function erase() {
    if (currentCharacterIndex > 0) {
        textElement.textContent = textElement.textContent.substring(0, currentCharacterIndex - 1);
        currentCharacterIndex--;
        setTimeout(erase, 100);
    } else {
        currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
        setTimeout(type, 500);
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    setTimeout(type, 1000);
});
