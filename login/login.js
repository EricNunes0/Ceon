const submitForm = document.getElementById("form");

submitForm.addEventListener("submit", function(e) {
    e.preventDefault();
    let email = document.querySelector("#input-email");
    let password = document.querySelector("#input-password");
    if(!email.value) {
        email.style.border = "1px solid #f00";
        document.querySelector("#login-required-email").style.display = "block";
        return;
    } else {
        email.style.border = "1px solid #a0a0a0";
        document.querySelector("#login-required-email").style.display = "none";
    };
    if(!password.value) {
        password.style.border = "1px solid #f00";
        document.querySelector("#login-required-password").style.display = "block";
        return;
    } else {
        password.style.border = "1px solid #a0a0a0";
        document.querySelector("#login-required-password").style.display = "none";
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