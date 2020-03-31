
$(document).ready(function () {
    var title = getUrlParameter('title');
    var message = getUrlParameter('message');
    if (title !== undefined && message !== undefined) {
        $('#modal-message').modal('show');
        $('#message-title').text(title);
        $('#message-content').text(message);
    }
})

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}
$('#btn-login').on('click', function () {
    var message = "";
    displayError(false, "");

    $('#message-alert-login').hide();
    var username = $('#username').val();
    var password = $('#password').val();

    if (username == '') {
        message = message.concat("- กรุณากรอก USERNAME <br>");
    }
    if (password == '') {
        message = message.concat("- กรุณากรอก PASSWORD <br>");
    }
    if (message != '') {
        displayError(true, message);
        return;
    }

    $.ajax({
        url: "Login_Controller/login",
        type: "POST",
        dataType: "JSON",
        data: {
            "username": username,
            "password": password,
        }, success: function (resp) {
            console.log(resp);
            if (resp.result == true) {
                window.location = "welcome";
            } else {
                displayError(true, resp.message);
            }
        }, error: function (error) {
            console.log(error);

        }
    })

});
function displayError(show, message) {
    //show ? $('#alert').show() : $('#alert').hide();
    if (show) {
        $('#message-alert-login').show();
    } else {
        $('#message-alert-login').hide();
    }
    $('#message-alert-login').html(message);
}

function Logout(){
    window.location = "login_controller/logout";
}