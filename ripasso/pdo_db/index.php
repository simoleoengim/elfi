<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        require("dbconn.php");
    ?>

    <table>
        <tr>
            <th>Nome Prodotto</th><th>Colore</th><th>Taglia</th>
        </tr>
        <?php
            try{
                $query = $connessione->prepare("SELECT nomep,
                colore, taglia FROM prodotti;");
                $query->execute();
                $risultato = $query->setFetchMode(PDO::FETCH_ASSOC);         
                foreach($query->fetchAll() as $row){
                    echo "<tr><td>" .$row["nomep"].
                    "</td><td>".$row["colore"].
                    "</td><td>". $row["taglia"].
                    "</td></tr>";
                }
            }
            catch(PDOException $e){
                echo "<br> C'è stato un errore: ". $e->getMessage(); 
            }
        ?>
    </table>

    <?php
        $connessione = null;
    ?>
</body>
</html>