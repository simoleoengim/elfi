<?php

    $servername = "localhost";
    $password = "Prog-2022";
    $username = "phpdb";
    $dbname = "esercizi";

    try{
        $connessione = 
        new PDO("mysql:host=$servername;dbname=$dbname", 
                $username, $password);

        $connessione->setAttribute(PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION);
        // echo "<br>Tutto ok<br>";

    }

    catch(PDOException $e){
        echo "<br> C'è stato un errore: ". $e->getMessage();  
    }


?>