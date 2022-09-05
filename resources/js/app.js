import $ from 'jquery';
window.jQuery = window.$ = $;

$(document).ready(function() {

    function printError(message){
        let element = $('.alert');
        element.text("");
        element.show();
        element.text(message);
    }

    function clearError(){
        let element = $('.alert');
        element.css("display","none");
    }

    $('#first_form input[type=button]').click(function(e) {

        let name = $('#name').val();
        let password = $('#password').val();
        let passwordConfirm = $('#confirm-password').val();
        const nameRegx = /[a-zA-Z][a-zA-Z0-9-_]{3,32}/gi;
        const passwordRegx = /^(?=.*\d)(?=.*[a-zA-Z]).{4,}$/gm;
        let check = [];

        if(password !== passwordConfirm) {
            printError("Passwords do not match");
            check.push("error");
        }

        if(password === "") {
            printError("Please enter a password");
            check.push("error");
        } else {
            if(passwordRegx.test(password) === false) {
                printError("Please enter a valid password");
                check.push("error");
            }
        }

        if(name === "") {
            printError("Please enter your name");
            check.push("error");
        } else {
            if(nameRegx.test(name) === false) {
                printError("Please enter a valid name");
                check.push("error");
            }
        }

        if(check.length < 1){
            clearError();
            $('#first_form').submit();
        }
    });

});

//
