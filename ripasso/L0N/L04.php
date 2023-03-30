<?php
    /*
        Rifacciamo il login usando PDO che è un 
        passpartout per tutti i DBMS 
        (mysql, postgres, oracle..)
    */

  session_start(); //avvia o recupera la sessione utente

  $servername = "localhost";

  /*utente settato da xampp durante
  l'installazione*/
  $username = "root"; 

  /*password settata da xampp durante
  l'installazione - di default è vuota*/
  $password = "";

  $dbname = "elfi";
  
  //try = prova ad eseguire il blocco di codice
  try {

    //creiamo un nuovo oggetto connessione chiamando la
    // classe PDO con i parametri definiti prima
    $conn = 
    new PDO("mysql:host=$servername;dbname=$dbname", 
    $username, $password);

    //Questo codice è opzionale e serve a creare 
    // un report di errori nel caso ce ne siano.
    //Chiamiamo il metodo setAttribute della classe PDO
    // sull'oggetto conn creato prima.
    $conn->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

    //Stampiamo a video un messaggio per l'utente se 
    // va tutto bene.
    echo "La connessione è stata stabilita; <br>";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT username, password FROM utenti 
        WHERE username='$username'";

    //$conn->exec()

  } 
  //catch cerca di intercettare gli errori ed esegue 
  // ill suo blocco di codice
  catch(PDOException $e) {
    echo "Connessione fallita, c'è stato un
    errore: " . $e->getMessage();
  }
  


?>