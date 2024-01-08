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