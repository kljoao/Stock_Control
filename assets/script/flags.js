const cabal = document.querySelector('#cabal');
const cabalCheckbox = document.querySelector('#cabal-checkbox');

cabalCheckbox.addEventListener('change', () => {
    if (cabalCheckbox.checked) {
        cabal.setAttribute('style', 'display: block !important;');
    } else {
        cabal.setAttribute('style', 'display: none !important;');
    }
});

const master = document.querySelector('#master');
const masterCheckbox = document.querySelector('#master-checkbox');

masterCheckbox.addEventListener('change', () => {
    if (masterCheckbox.checked) {
        master.setAttribute('style', 'display: block !important;');
    } else {
        master.setAttribute('style', 'display: none !important;');
    }
});

visa = document.querySelector('#visa');
const visaCheckbox = document.querySelector('#visa-checkbox');

visaCheckbox.addEventListener('change', () => {
    if (visaCheckbox.checked) {
        visa.setAttribute('style', 'display: block !important;');
    } else {
        visa.setAttribute('style', 'display: none !important;');
    }
});

elo = document.querySelector('#elo');
const eloCheckbox = document.querySelector('#elo-checkbox');

eloCheckbox.addEventListener('change', () => {
    if (eloCheckbox.checked) {
        elo.setAttribute('style', 'display: block !important;');
    } else {
        elo.setAttribute('style', 'display: none !important;');
    }
});

hipercard = document.querySelector('#elo');
const hipercardCheckbox = document.querySelector('#hipercard-checkbox');

hipercardCheckbox.addEventListener('change', () => {
    if (hipercardCheckbox.checked) {
        hipercard.setAttribute('style', 'display: block !important;');
    } else {
        hipercard.setAttribute('style', 'display: none !important;');
    }
});