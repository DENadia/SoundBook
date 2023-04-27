<html>
<head><title>Stergere piesa-pentru interpret</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="titlu" placeholder="Song Name" required><br>
        <input type="submit" name="trimite" value="Delete">
    </form>
</body>
</html>
<?php
    if(isset($_POST["trimite"]))
    {
        include("conectare.php");
        $titlu=$_POST["titlu"];
        $sql="DELETE from piese WHERE(titlu='$titlu')";
        if(mysqli_query($conn,$sql))
        {
            ?> 
            <script type="text/javascript">
                alert("Succesfully deleted");
            </script>
    <?php
        }
                    
        else
            echo "Error";
    }
?>