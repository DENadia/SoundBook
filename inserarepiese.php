<html>
<head><title>Inserare</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="adaugare_piesa" placeholder="Song name" required><br>
        <input type="text" name="adaugare_film" required placeholder="Film id"><br>
        <input type="text" name="cod_piesa" placeholder="Song code" required><br>
        <input type="text" name="interpret" placeholder="Singer" required><br>
        <input type="submit" name="submit" value="Apply">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include("conectare.php");
        $a=$_POST['adaugare_piesa'];
        $b=$_POST['adaugare_film'];
        $cod=$_POST['cod_piesa'];
        $c=$_POST['interpret'];
        $sql="Insert into soundtrack(denumire,cale,interpret,id_film) values ('$a','$cod','$c','$b')";
        if(mysqli_query($conn,$sql))
        {
            echo "Adaugare finalizata";
        }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
        
    }
?>