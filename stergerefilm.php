<html>
<head><title>Stergere piesa-pentru interpret</title></head>
<body>
    <form action="" method="post">
       <?php
            $sql="SELECT* from filme";
        include("conectare.php");
        if($r=mysqli_query($conn,$sql))
        {
            ?><p>Alegeti filmul</p>
            <select name="sel">
                <?php
                    while($linie=mysqli_fetch_array($r))
                    {
                        echo "<option value='$linie[0]'>$linie[2]</option>";
                    }
            
                ?>
            </select> <br>
        <?php
        }
        ?>
        <input type="submit" name="trimite3" value="Delete">
    </form>
</body>
</html>
<?php
    if(isset($_POST["trimite3"]))
    {
        include("conectare.php");
        $t=$_POST['sel'];
        $r="Select  poza from filme where id_film='$t'";
        $p=mysqli_query($conn,$r);
        $linie=mysqli_fetch_array($p);
        $sql2="DELETE from filme where id_film='$t'";
        unlink($linie[0]);
        if(mysqli_query($conn,$sql2))
        {
                                                ?> 
            <script type="text/javascript">
                alert("Succesfully deleted film");
            </script>
    <?php
            
        }
        else
        {
                echo "error";
        }
        $sql="DELETE from soundtrack where id_film='$t'";
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