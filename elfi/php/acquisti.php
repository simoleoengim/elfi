<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisti</title>
    <link rel="shortcut icon" href="img/carrello.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        require('lemiefunzioni.php');
        $session_user = islogged();

        if(isset($_POST['btnBuy'])){
            $conn = connettimi("localhost","phpdb","Prog-2022","elfi");

            if($conn == null){
                echo "Errore di connessione";
            }

            else{
                try{
                    $sql = $conn->prepare(
                        "INSERT INTO acquisti(nome_prodotto, qta, username)
                        VALUES (:nome_prodotto, :qta, :username);");
                    
                    $sql->bindParam(':nome_prodotto', $nome_prodotto);
                    $sql->bindParam(':qta', $qta);
                    $sql->bindParam(':username', $username);
                    
                    $nome_prodotto = $_POST["nome_prodotto"];
                    $qta =  $_POST["qta"];
                    //$username = $_SESSION["session_user"];
                    $username = $session_user;

                    $sql->execute();
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            }
            
            $conn = null;
        }

    ?>
    
    <form action="" method="post">
        <fieldset>
            <legend>I tuoi acquisti</legend>
            <label for="nome_prodotto">Nome del prodotto da acquistare:</label>
            <input type="text" name="nome_prodotto" id="nome_prodotto" placeholder="Nome prodotto">
            <br><br>
            <label for="qta">Quanti pezzi ne vuoi acquistare?</label>
            <input type="number" name="qta" id="qta" placeholder="es: 10">
            <br><br>
            <input type="submit" name="btnBuy" value="Acquista">
        </fieldset>
    </form>

</body>
</html>