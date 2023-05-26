const submitForm = document.getElementById("form");

submitForm.addEventListener("submit", function(e) {
    e.preventDefault();
    let name = document.querySelector("#input-name");
    let genderRadios = document.querySelectorAll("#input-gender");
    let phone = document.querySelector("#input-phone");
    let email = document.querySelector("#input-email");
    let password = document.querySelector("#input-password");
    if(!name.value) {
        name.style.border = "1px solid #f00";
        document.querySelector("#register-required-name").style.display = "block";
        return;
    } else {
        name.style.border = "1px solid #a0a0a0";
        document.querySelector("#register-required-name").style.display = "none";
    };

    let genderChosen;
    for(let i = 0; i <= genderRadios.length - 1; i++) {
        if(genderRadios[i].checked) {
            genderChosen = genderRadios[i].value;
            break;
        }
    };
    if(!genderChosen) {
        document.querySelector("#register-required-gender").style.display = "block";
        return;
    } else {
        document.querySelector("#register-required-gender").style.display = "none";
    };

    /* Verificar se o telefone foi digitado */
    if(!phone.value) {
        phone.style.border = "1px solid #f00";
        document.querySelector("#register-required-phone").style.display = "block";
        return;
    } else {
        phone.style.border = "1px solid #a0a0a0";
        document.querySelector("#register-required-phone").style.display = "none";
    };

    /* Verificar se o email foi digitado */
    if(!email.value) {
        email.style.border = "1px solid #f00";
        document.querySelector("#register-required-email").style.display = "block";
        return;
    } else {
        email.style.border = "1px solid #a0a0a0";
        document.querySelector("#register-required-email").style.display = "none";
    };

    /* Verificar se a senha foi digitada */
    if(!password.value) {
        password.style.border = "1px solid #f00";
        document.querySelector("#register-required-password").style.display = "block";
        return;
    } else {
        password.style.border = "1px solid #a0a0a0";
        document.querySelector("#register-required-password").style.display = "none";
    };
    submitForm.submit();
});

function openPassword() {
    let passwordInput = document.querySelector("#input-password");
    let passwordButtonImage = document.querySelector("#password-icon-img");
    console.log(passwordInput.type);
    if(passwordInput.type == "password") {
        passwordButtonImage.src = "https://i.imgur.com/QqDMi1K.png";
        passwordInput.type = "text";
    } else if(passwordInput.type == "text") {
        passwordInput.type = "password";
        passwordButtonImage.src = "https://i.imgur.com/Ia8ZR2R.png";
    }
}