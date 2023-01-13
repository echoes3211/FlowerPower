
$conn = new PDO('mysql:host=localhost;dbname=flowerpower', 'root', '');
if(!$conn){
	die("Fatal Error: Connection Failed!");
}
?>


$name = $_POST['gebruikersnaam'];
$password = $_POST['wachtwoord'];
$repeatpassword = $_POST['wwherhalen'];
$email = $_POST['email'];

if ($password === $repeatpassword) {}
else {
	exit();
}

try{
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO klantinfo(name, password, email) VALUES ('$name', '$password', '$email')";
	$conn->exec($sql);
}
catch(PDOException $e){
	echo $e->getMessage();
}

$conn = null;





$('#manage_user').submit(function(e) {
    e.preventDefault()
})



const button = document.getElementById('submit');

button.onclick = function checkPassword(){

    let password = document.getElementById('wachtwoord').value;
    let passwordconfirm = document.getElementById('wwherhalen').value;
    let message = document.getElementById('message');

    if (password.length != 0) {
        if (password == passwordconfirm) {
            $(document).ready(function() {
                $('#manage_user').submit(function(e) {
                    e.preventDefault()
            
                    $.ajax({
                        url: 'DataSend.php',
                        data: $(this).serialize(),
                        method: 'POST',
                        success: function(resp) {
                            $('#message').html(resp);
                        }
                    })
                })
            })
        } else{
            message.innerHTML = "It dont match my g";
        }
    } else {
        
    }
}