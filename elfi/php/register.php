<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
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
$email = $_POST["email"];

$sql = "SELECT username FROM utenti 
        WHERE username='$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "L'utente è già inserito <br>";
    echo '<a href="../login.html">Puoi effetuare il login</a>';
  } 
else {
    // echo "L'utente non esiste ancora";
    $password_cifrata = password_hash($password, PASSWORD_BCRYPT);
    $sql_insert = 
    "INSERT INTO utenti 
    VALUES ('$username', '$password_cifrata', '$email')";

    $result_insert = $conn->query($sql_insert);

    if($result_insert === TRUE){
      echo "Registrazione effettuata <br>";
      echo '<a href="../login.html">Puoi effetuare il login</a>';
    }
    else{
      echo "Errore, registrazione fallita!";
    }

}

$conn->close();
 

echo '<br> <a href="../register.html">Torna indietro</a>';

?>


</body>
</html>