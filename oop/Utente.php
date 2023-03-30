<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmazione ad oggetti</title>
</head>
<body>
    
    <?php

        class Utente {

            //proprietà
            protected $nome;
            protected $cognome;

            //metodi
            public function __construct($arg1, $arg2) {
                $this->nome = $arg1;
                $this->cognome = $arg2;
              }

            public function __destruct(){
                echo "<br>L'utente " . $this->nome . " " . $this->cognome . " è stato rimosso.<br>";
            }

            public function saluta($arg1){
                echo "<br>Ciao " . $arg1 . "<br>";
                echo "Io sono " . $this->nome . "!";
            }

            public function set_nome($nome){
                $this->nome = $nome;
            }

            public function get_nome(){
                return $this->nome;
            }

            public function set_cognome($cognome){
                $this->cognome = $cognome;
            }

            public function get_cognome(){
                return $this->cognome;
            }

        }

        class UtenteTwitter extends Utente {
            
            //proprietà
            private $handle;
            const SOCIAL_NETWORK = "Twitter"; 
            
            //metodi override
            public function __construct($nome, $cognome, $handle){
                $this->nome = $nome;
                $this->cognome = $cognome;
                $this->handle = $handle;
            }

            //metodi nuovi solo della classe figlia
            public function tweet(){
                echo "Io sono un utente Twitter";
            }

            public function set_handle($handle){
                $this->handle = $handle;
            }

            public function get_handle(){
                return $this->handle;
            }
        }

        
    ?>


</body>
</html>