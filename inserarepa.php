<html>
<head><title>Inserare piesa-pentru interpret</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="titlu" placeholder="Song Name" required><br>
        <input type="text" name="cale" required placeholder="Song code"><br>
        <input type="text" name="id_interpret" placeholder="Singer" required><br>
        <input type="submit" name="submit1" value="Apply">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit1']))
    {
        include("conectare.php");
        $titlu=$_POST['titlu'];
        $cale=$_POST['cale'];
        $id=$_POST['id_interpret'];
        $sql="Insert into piese(titlu,cale,id_interpret) values ('$titlu','$cale','$id')";
        if(mysqli_query($conn,$sql))
        {
            echo "Done";
        }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
        
    }
?>