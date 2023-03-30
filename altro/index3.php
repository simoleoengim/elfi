<!DOCTYPE html>
<html>
<body>

<h2> Benvenuto </h2>
<p> prova di utilizo di include once php</p>

<?php include_once 'daincludere.php';?>

<h2> Connessione a mysql</h2> 

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

$sql = "SELECT id, nome FROM regali";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo $row["id"]." ".$row["nome"]."<br>";
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>

<h2>Array associativo</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age["Peter"];
?>
</body>
</html>