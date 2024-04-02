const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const span = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;



//Abaixo a função para validar se os campos foram todos preenchidos,
//nesse projeto usei a validação do required do html mesmo

form.addEventListener('submit', (event) => {
    event.preventDefault();
    nameValidate();
    emailValidate();
    mainPasswordValidate();
    comparePassword();
    logar();


});


function setError(index) {
    campos[index].style.border = '2px solid #e36363';
    span[index].style.display = 'block';
}

function removeError(index) {
    campos[index].style.border = '';
    span[index].style.display = 'none';
}

function nameValidate() {
    if (campos[0].value.length < 3) {
        setError(0);

    }
    else
        removeError(0);
}


function emailValidate() {
    if (emailRegex.test(campos[1].value)) {

        removeError(1);
    }
    else {
        setError(1);
    }

}

function mainPasswordValidate() {
    if (campos[2].value.length < 8) {
        setError(2);
    }
    else {
        removeError(2);
        comparePassword();
    }
}


function comparePassword() {
    if (campos[2].value == campos[3].value && campos[3].value.length >= 8) {
        removeError(3);
    }
    else {
        setError(3);
    }
}

function logar() {

    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var repSenha = document.getElementById('repSenha').value;



    if (nome != '' && email != '' && senha != '' && repSenha != '') {
        alert('Usuário criado com sucesso')

    }
    else {
        alert('Usuário ou senha incorretos');
    }

}