<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "natale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$data = $_POST["data"];

//echo $id . " " . $nome . " " . $categoria . " " . $data;

$sql = "INSERT INTO regali (id, nome, categoria, data1)
VALUES ('$id', '$nome', '$categoria', '$data')";

if ($conn->query($sql) === TRUE) {
  echo "Righe inserite";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>