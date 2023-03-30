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
        echo "Dichiarazione di variabili";
        $var1 = 10; 
        $stringa1 = "Questa è una stringa";
        $bool1 = true;
        $codhtml = "<img src='./'>";
        $varf = "include_once(nomefile.php)";

        $vettore1 = array("pos1", 1, "pos3");
        echo $vettore1[2]; //pos3
        $vettorecomplesso = array("nome"=>"simo", "cognome"=>"leo");
        echo $vettorecomplesso["nome"]; // simo
        //$_POST["username"] //i valori inserite nel form che usa la post, sono nascosti
        //$_GET["colore"] //mette in chiaro nella barra degli indirizzi i valori del form
        $miouser = $_POST["username"]; 
        // for e foreach
        echo "Info1" . $miouser . "vado a capo <br>"; //col punto concateno le stringhe
    ?>
</body>
</html>