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

const quantidade = document.querySelector('#quantity')

function criarCampos(){
    document.getElementById('campos-cnpjs').innerHTML = '';

    // Obtém a quantidade de CNPJs do usuário
    var quantidadeCnpjs = document.getElementById('quantidade-cnpjs').value;

    // Cria novos campos de input com base na quantidade fornecida
    for (var i = 0; i < quantidadeCnpjs; i++) {
      var novoInput = document.createElement('quantidade');
      novoInput.type = 'text';
      novoInput.className = 'cnpj-input';
      novoInput.placeholder = 'Digite o CNPJ ' + (i + 1);

      // Adiciona o novo input à div
      document.getElementById('campos-cnpjs').appendChild(novoInput);
    }
}


const addCnpjButton = document.querySelector('.add-cnpj');
const cnpjsContainer = document.getElementById('cnpjsContainer');

function adicionarCnpj() {
    const novoInput = document.createElement('input');
    novoInput.type = 'text';
    novoInput.placeholder = 'CNPJ Adicional';
    novoInput.className = 'cnpj-adicional';
    novoInput.style.width = '150px';
    novoInput.style.padding = '10px';
    novoInput.style.borderRadius = '5px';
    novoInput.style.border = 'solid 1px black';

    cnpjsContainer.appendChild(novoInput);
}

addCnpjButton.addEventListener('click', adicionarCnpj);

function formatarMoeda(){
    const faturamentoMensal = document.querySelector('#faturamentoMensal');
    valor = faturamentoMensal.value

    valor = valor + ''
    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g, ''));
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    elemento.value = valor;
    if(valor == 'NaN') elemento.value = '';
}