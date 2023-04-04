<?php
function connettimi($servername, $username, $password, $dbname){
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                        $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "<br> C'è stato un errore: ". $e->getMessage();
        return null;  
    }
}

?>