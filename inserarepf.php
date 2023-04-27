<html>
<head><title>Inserare piesa</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="denumire" placeholder="Song Name" required><br>
        <input type="text" name="cale" required placeholder="Song code"><br>
        <input type="text" name="interpret" placeholder="Singer" required><br>
        <input type="text" name="id_film" placeholder="Id film" required><br>
        <input type="submit" name="submit" value="Apply">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include("conectare.php");
        $denumire=$_POST['denumire'];
        $cale=$_POST['cale'];
        $interpret=$_POST['interpret'];
        $id=$_POST['id_film'];
        $sql="Insert into soundtrack (denumire,cale,interpret,id_film) values ('$denumire','$cale','$interpret','$id')";
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