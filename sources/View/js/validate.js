const registerSubmit = $('#registerSubmit');
const loginSubmit = $('#loginSubmit');
const fullname = $('#fullname');
const username = $('#username');
const mail = $('#email');
const password = $('#password');
const repassword = $('#re-password');

const fullnameErrBox = $('#fullname-error');
const usernameErrBox = $('#username-error');
const passErrBox = $('#password-error');
const repassErrBox = $('#repassword-error');
const emailErrBox = $('#email-error');

const nameRegex = /^[a-zA-Z ]+$/;
const mailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;




const isNameCorrect = () => {
    if(fullname.val().length < 3 || !nameRegex.test(fullname.val())) {
        fullnameErrBox.css({
            display: 'block',
        });
        console.log('name fail');
        return false;
    } else {
        fullnameErrBox.css({
            display: 'none',
        });
        console.log('name success');
        return true;;
    }
}
const isUsernameCorrect = () => {
    if(!nameRegex.test(username.val())) {
        usernameErrBox.css({
            display: 'block',
        });
        console.log('username fail');
        return false;
    } else {
        usernameErrBox.css({
            display: 'none',
        });
        console.log('username success');
        return true;
    }
}
const isPasswordCorrect = () => {
    if(password.val().length < 4) {
        passErrBox.css({
            display: 'block',
        });
        console.log('password fail');
        return false;
    } else {
        passErrBox.css({
            display: 'none',
        });
        console.log('password success');
        return true;
    }
}
const isRepasswordCorrect = () => {
    console.log(repassword.val(), password.val());
    if(repassword.val() !== password.val() || repassword.val().length < 4) {
        repassErrBox.css({
            display: 'block',
        });
        console.log('repassword fail');
        return false;
    } else {
        repassErrBox.css({
            display: 'none',
        });
        console.log('repassword success');
        return true;
    }
}
const isMailCorrect = () => {
    if(!mailRegex.test(mail.val())) {
        emailErrBox.css({
            display: 'block',
        });
        console.log('mail fail');
        return false;
    } else {
        emailErrBox.css({
            display: 'none',
        });
        console.log('mail success');
        return true;
    }
}
registerSubmit.click(() => {
    if(isNameCorrect() && isUsernameCorrect() && isPasswordCorrect() && isRepasswordCorrect() && isMailCorrect()) {
        console.log('send');
        return true;
    } else {
        console.log('fail');
        return false;
    }
});

loginSubmit.click(() => {
    let username = true;
    let pass = true;
    if($('#login-username').val().length <= 0) {
        $('#login-username-error').css ({
            display: 'block',
        });
        username = false;
    } else {
        $('#login-username-error').css({
            display: 'none',
        });
        username = true;
    }

    if($('#login-password').val().length <= 0) {
        $('#login-password-error').css ({
            display: 'block',
        });
        pass = false;
    } else {
        $('#login-password-error').css({
            display: 'none',
        });
        pass = true;
    }

    return username && pass;
})