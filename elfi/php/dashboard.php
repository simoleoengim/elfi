<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
      
    <?php
        session_start();
        if(isset($_SESSION['session_id'])){
            $session_user = $_SESSION['session_user'];
            echo '<img src="uploads/'.$session_user.'" class="img-thumbnail" alt="immagine profilo" style="width: 150px;">';
            echo "<br> Benvenuto '$session_user'!";
            echo '<a href="../acquisti.html">Effettua un acquisto</a>';
        }

        else{
            echo "Devi prima fare il login!<br>"; 
            echo '<a href="../login.html">Accedi qui</a>';
        }

    ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Carica la tua immagine profilo:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Carica un'immagine" name="submit">
</form>



<form action="logout.php" method="post">
    <input type="submit" 
            class="btn btn-warning center" 
            name="logout" value="Logout">
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>