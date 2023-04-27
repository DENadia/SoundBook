<html>
<head><title>Stergere piesa-pentru interpret</title></head>
<body>
    <form action="" method="post">
        <input type="text" name="pseudonim" placeholder="Pseudoname" required><br>
        <input type="submit" name="trimite2" value="Delete">
    </form>
</body>
</html>
<?php
    if(isset($_POST["trimite2"]))
    {
        include("conectare.php");
        $pseudonim=$_POST["pseudonim"];
        $r="Select id_artist, poza_a from artists where pseudonim='$pseudonim'";
        $p=mysqli_query($conn,$r);
        $linie=mysqli_fetch_array($p);
        $sql2="DELETE from artists where id_artist='$linie[0]'";
        unlink($linie[1]);
        if(mysqli_query($conn,$sql2))
        {
                                                ?> 
            <script type="text/javascript">
                alert("Succesfully deleted artist");
            </script>
    <?php
            

            
        }
        else
        {
                echo "error";
        }
        $sql="DELETE from piese where id_interpret='$linie[0]'";
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