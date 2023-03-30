<html>
<body>

<form action="#" method="post">
Id: <input type="number" name="id"><br>
Nome: <input type="text" name="nome"><br>
Categoria: <input type="text" name="categoria"><br>
Data "AAAA-MM-GG": <input type="date" name="data"><br>
<input type="submit" name="btninvio">
</form>

<?php 
    if(isset($_POST["btninvio"])){
        echo "Hai cliccato!";
    }

 
?>

</body>
</html>