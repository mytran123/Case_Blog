$(document).ready(function () {
    $('#icon-eye-password').click(function () {

        let classPasswordIcon = $('#eye-password').attr('class');
        let typePassword = 'password';
        if (classPasswordIcon == "fas fa-eye") {
            classPasswordIcon = "fas fa-eye-slash"
            typePassword = 'password'
        } else {
            classPasswordIcon = "fas fa-eye"
            typePassword = 'text'
        }

        // $('#eye-password').removeClass().addClass('fas fa-eye'); //nhắm -> mở
        // $('#password').attr('type','text'); //ẩn -> hiện chữ
        $('#eye-password').removeClass().addClass(classPasswordIcon);
        $('#password').attr('type',typePassword);
    })
})
