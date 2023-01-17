function validateForm(){
    let emailValid=validateEmail(document.forms["registerForm"]["email"]);
    let usernameValid=validateUsername(document.forms["registerForm"]["username"]);
    let passwordValid=validatePassword(document.forms["registerForm"]["password"]);
    let msg="";

    if(emailValid===false || usernameValid===false || passwordValid===false) {
        if(!usernameValid){
            msg+="Username can only contain characters A-Z, a-z and 0-9.\n";
        }
        if (!emailValid){
            msg+="You have entered an invalid email address!\n";
        }
        if(!passwordValid){
            msg+="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!\n";
        }
        alert(msg)
        return false;
    }
    return true;
}
function validateEmail(pEmail){
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let email = pEmail;
    if(!email.value.match(mailformat)) {
        alert("You have entered an invalid email address!\n");
        email.classList.remove("invalid");
        email.classList.add("invalid");
        return false;
    }else{
        email.classList.remove("invalid");
        return true;
    }
}
function validateUsername(pUsername) {
    let username = pUsername;
    if (!username.value.match(/^[a-zA-Z0-9]+$/)) {
        alert("You have entered an invalid nickname!\n");
        username.classList.remove("invalid");
        username.classList.add("invalid");
        return false;
    } else {
        username.classList.remove("invalid");
        return true;
    }
}
function validatePassword(pPassword){
    let password=pPassword;
    if(!password.value.match(/[a-z]/g)||!password.value.match(/[A-Z]/g)||!password.value.match(/[0-9]/g)||password.value.length<8){
        alert("You have entered an invalid password!\n");
        password.classList.remove("invalid");
        password.classList.add("invalid");
        return false;
    }else{
        password.classList.remove("invalid");
        return true;
    }
}

function validateFullName(pFullName){
    let fn=pFullName;
    if(!fn.value.match(/^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})$/g)){
        alert("You have entered an invalid name!\n");
        fn.classList.remove("invalid");
        fn.classList.add("invalid");
        return false;
    }else{
        fn.classList.remove("invalid");
        return true;
    }
}

function validateMobile(pMobile){
    let mobile=pMobile;
    if(!mobile.value.match(/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/)){
        alert("You have entered an invalid mobile!\n");
        mobile.classList.remove("invalid");
        mobile.classList.add("invalid");
        return false;
    }else{
        mobile.classList.remove("invalid");
        return true;
    }
}
function validateAdress(pAdress){
    let ad=pAdress;
    if(!ad.value.match(/^[a-zA-Z0-9\s,.'-]{3,}$/)){
        alert("You have entered an invalid address!\n");
        ad.classList.remove("invalid");
        ad.classList.add("invalid");
        return false;
    }else{
        ad.classList.remove("invalid");
        return true;
    }
}
function validateLogin(pLoginForm){
    let login=pLoginForm;
    let loginResult=validateUsername(login.login);
    let passwordResult=validatePassword(login.password);
    if(!loginResult || !passwordResult){
        return false;
    }else{
        return true;
    }
}