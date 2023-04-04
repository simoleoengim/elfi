<?php
    session_start();
    require('lemiefunzioni.php');
    
    $conn = connettimi("localhost","phpdb","Prog-2022","elfi");
    //$conn = connettimi("localhost","root","","elfi");

    if($conn == null){
        echo "Errore di connessione";
    }

    else{
        $sql = $conn->prepare(
            "INSERT INTO acquisti(nome_prodotto, qta, username)
             VALUES (:nome_prodotto, :qta, :username);");
        
        $sql->bindParam(':nome_prodotto', $nome_prodotto);
        $sql->bindParam(':qta', $qta);
        $sql->bindParam(':username', $username);
        
        $nome_prodotto = $_POST["nome_prodotto"];
        $qta =  $_POST["qta"];
        //$username = $_SESSION["session_user"];
        $username = "simone";

        $sql->execute();
    }
    
    $conn = null;

?>