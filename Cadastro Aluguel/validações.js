function validarEnvio() {
    event.preventDefault(); //evitar o envio do formulario

    if (input_id.value.length !== 2) {
        // numero.style.border = '1px solid red';
        input_id.classList.add('is-invalid');
    }else{
        input_id.classList.remove('is-invalid');
        input_id.classList.add('is-valid'); 
    }

    if (input_nome.value === '') {
        input_nome.classList.add('is-invalid');
    }else{
        input_nome.classList.remove('is-invalid');
        input_nome.classList.add('is-valid'); 
    }

    if (input_data.value.length !== 8) {
        input_data.classList.add('is-invalid');
    }else{
        input_data.classList.remove('is-invalid');
        input_data.classList.add('is-valid'); 
    }

    if (input_tipo.value === '') {
        input_tipo.classList.add('is-invalid');
    }else{
        input_tipo.classList.remove('is-invalid');
        input_tipo.classList.add('is-valid'); 
    }

    if (cvv.value.length !== 3) {
        cvv.classList.add('is-invalid');
    }

    if (cpf.value === '') {
        cpf.classList.add('is-invalid');
    }
    
    }




function alterarNumero() {
    numero.classList.remove('is-invalid');

    if (numero.value.length === 19) {
        numero.classList.add('is-valid');
    }
    
    //pega os valores digitados no input (numero) e leva até a div do cartão (card_numero)
    card_numero.innerHTML = numero.value;

    if (numero.value.substr(0, 1) === "4") {
        card_bandeira.innerHTML = '<img src="img/visa.png" width="40px">';
    } else if (numero.value.substr(0, 1) === "5") {
        card_bandeira.innerHTML = '<img src="img/master.png" width="40px">';
    }
}

function alterarMes() {
    mes.classList.remove('is-invalid');

    card_validade.innerHTML = mes.value + "/" + ano.value; 
}

function alterarAno() {
    ano.classList.remove('is-invalid');
    
    card_validade.innerHTML = mes.value + "/" + ano.value;
}

function alterarCPF() {
    cpf.classList.remove('is-invalid');

    let ultimoDigito = cpf.value.substr(-1);

    if (isNaN(ultimoDigito)) {
        let quantidade = cpf.value.length; 
        let resultado = cpf.value.substr(0, quantidade - 1);

        cpf.value = resultado;
    }

    if (cpf.value.length === 11) {
        cpf.classList.add('is-valid');
    }
}

function alterarCVV() {
    cvv.classList.remove('is-invalid');

    let ultimoDigito = cvv.value.substr(-1); //pegando a ultima letra/numero

    if (isNaN(ultimoDigito)) {
        let quantidade = cvv.value.length;
        let resultado = cvv.value.substr(0, quantidade - 1);

        cvv.value = resultado;
    }

    if (cvv.value.length === 3) {
        cvv.classList.add('is-valid');
    }

    card_cvv.innerHTML = cvv.value;
}