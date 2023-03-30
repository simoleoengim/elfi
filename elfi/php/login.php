<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check login</title>
</head>
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elfi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username, password FROM utenti 
        WHERE username='$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // ok l'utente è registrato e può procedere alla 
    // verifica della password 
    while($row = $result->fetch_assoc()){
        //print_r($row);
        $pswdb = $row["password"];
        //$psw_inserita_cifrata = password_hash($password, PASSWORD_BCRYPT);
    }
    if(password_verify($password, $pswdb) === FALSE){
        echo "La password inserita é sbagliata! <br>";
        echo '<a href="../login.html">Torna al login</a>';
    }
    else{
        session_regenerate_id();
        $_SESSION['session_id'] = session_id();
        $_SESSION['session_user'] = $username;
        setcookie("nome_utente", $username, time()+ 60*60*24*2, "/");
        echo "Login effetuato con successo!";
        header('Location: dashboard.php');
        //header('Location: ../register.html');
        exit; 
    }
  } 

else {
    // L'utente non esiste nel database
    echo "Non sei ancora registrato <br>";
    echo "Per farlo vai alla pagina di registrazione";
    echo '<a href="../register.html">Vai a registrarti</a>';    
}

$conn->close();
 



?>


</body>
</html>