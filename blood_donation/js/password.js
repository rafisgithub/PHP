// Password and confirm Password validation
function validatePassword() {
    var password = document.getElementById("passwordID")
    var confirm_password = document.getElementById("confirmPasswordID");
    var msgId = document.getElementById("passwordMasssage");

    if (password.value != confirm_password.value) {
        msgId.innerHTML = '<h6 class="text-danger">Password does not matching.</h6>';
    } else {
        msgId.innerHTML = '<h6 class="text-success">Password matched.</h6>';
    }
}