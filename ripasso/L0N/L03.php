<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L03</title>
</head>
<body>
    
    <?php 
        $globale1 = "Ciao";
        $globale2 = 11;
        $_POST["username"]; //associata ai form con method post
        $_GET["colore"]; //associata ai form con method get visualizzo su url
        echo $GLOBALS["globale1"];  // Ciao //richiamo variabile in altra pagina php
        // globals può accedere solo a variabili che non sono state dichiarate dentro
        // altre funzioni 
        echo $_SERVER['PHP_SELF']; // stampa il percorso del file php della pagina aperta
        echo $_SERVER['SCRIPT_NAME']; //come sopra
        echo $_SERVER['SERVER_NAME']; //stampa indirizzo ip del server
        echo $_SERVER['HTTP_HOST']; //stampa indirizzo ip del server
        echo $_SERVER['HTTP_USER_AGENT']; // informazione sul browser e sul dispositivo che sta
                                            //visualizzando la pagina php
        

    ?>

</body>
</html>