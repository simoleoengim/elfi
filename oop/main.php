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
        include_once("Utente.php");

        $mario = new Utente("Mario", "Rossi");
        
        $mario->saluta("Simo");

        //$nome2M = $mario->nome; quando nome è public

        $nomeM = $mario->get_nome(); //quando nome è private

        echo "<br> $nomeM";

        $mario->set_nome("Gianni");

        $mario->saluta("Simo");

        //unset($mario);

        //$mario->saluta("Simo");

        $ElonMusk = new UtenteTwitter("Elon", "Musk", "Emusk");

        $ElonMusk->saluta("Mondo");
        
        echo UtenteTwitter::SOCIAL_NETWORK; 

    ?>
</body>
</html>