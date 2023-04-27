<html>
<head><title>Stergere piesa-pentru interpret</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="denumire" placeholder="Song Name" required><br>
        <input type="submit" name="trimite1" value="Delete">
    </form>
</body>
</html>
<?php
    if(isset($_POST["trimite1"]))
    {
        include("conectare.php");
        $denumire=$_POST["denumire"];
        $sql="DELETE from soundtrack WHERE(denumire='$denumire')";
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