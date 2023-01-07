$(document).ready(function() {
    $('#manage_user').submit(function(e) {
        e.preventDefault()

        $.ajax({
            url: 'DataSend.php',
            data: $(this).serialize(),
            method: 'POST',
        })
    })
})

const button = document.getElementById('submit');

button.onclick = function checkPassword(){

    let password = document.getElementById('wachtwoord').value;
    let passwordconfirm = document.getElementById('wwherhalen').value;

    if (password.length != 0) {
        if (password.length > 7 && password.length < 21) {
            if (password == passwordconfirm) {
                message.innerHTML = 'Hoera!';            
            } else{
                message.innerHTML = "Wachtwoorden komen niet overeen my G";
            }
        } else {
            message.innerHTML = 'Wachtwoord kan min 8 tekens en max 20'
        }
    } else {
        message.innerHTML = 'Waar is je wachtwoord';
    }
}