import $ from 'jquery';
window.jQuery = window.$ = $;

$(document).ready(function() {

    function printError(value,message){
        let element = $(value);
        element.text("");
        element.show();
        element.text(message);
    }

    function clearError(value){
        let element = $(value);
        element.css("display","none");
    }

    $('#register_form input[type=button]').click(function(e) {

        let name = $('#name').val();
        let password = $('#password').val();
        let passwordConfirm = $('#confirm-password').val();
        const nameRegx = /[a-zA-Z][a-zA-Z0-9-_]{3,32}/gi;
        const passwordRegx = /^(?=.*\d)(?=.*[a-zA-Z]).{4,}$/gm;
        let check = [];

        if(password !== passwordConfirm) {
            printError('.alert',"Passwords do not match");
            check.push("error");
        }

        if(password === "") {
            printError('.alert',"Please enter a password");
            check.push("error");
        } else {
            if(passwordRegx.test(password) === false) {
                printError('.alert',"Please enter a valid password");
                check.push("error");
            }
        }

        if(name === "") {
            printError('.alert',"Please enter your name");
            check.push("error");
        } else {
            if(nameRegx.test(name) === false) {
                printError('.alert',"Please enter a valid name");
                check.push("error");
            }
        }

        if(check.length < 1){
            clearError('.alert');
            $('#register_form').submit();
        }
    });


    $('#list_form input[type=button]').click(function(e) {

        let name = $('#name').val();
        let password = $('#password').val();
        const nameRegx = /[a-zA-Z][a-zA-Z0-9-_]{3,32}/gi;
        const passwordRegx = /^(?=.*\d)(?=.*[a-zA-Z]).{4,}$/gm;
        let check = [];

        console.log(name);
        console.log(password);

        if(name === "") {
            printError('.alert-text',"Please enter your name");
            check.push("error");
        } else {
            if(nameRegx.test(name) === false) {
                printError('.alert-text',"Please enter a valid name");
                check.push("error");
            }
        }

        if(password === "") {
            printError('.alert-text',"Please enter a password");
            check.push("error");
        } else {
            if(passwordRegx.test(password) === false) {
                printError('.alert-text',"Please enter a valid password");
                check.push("error");
            }
        }

        if(check.length < 1){
            clearError('.alert-text');
            $('#list_form').submit();
        }
    });

});

//
