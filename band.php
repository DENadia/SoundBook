<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/band.css">
        <title>Bands</title>
    </head>
    <body >
                <form action="" method="post" class="form-wrapper cf">
    <input type="text" name="search"  placeholder="Search here..." required>
            <button type="submit" name="rero">Search</button>
        </form>
    </body>
</html>
<?php
    include("conectare.php");
    if(isset($_POST['rero']))
    {
        $search=$_POST['search'];
    $sql="SELECT pseudonim from artists where bsaua=1 AND lower(pseudonim) LIKE '%$search%'";
    if($r=mysqli_query($conn, $sql))
    {
        if(mysqli_num_rows($r))
        {
            while($linie=mysqli_fetch_array($r))
            {
                echo "<form action=playlist3.php method=post>
                <input type=hidden name=artist value=".$linie[0].">
                <input type=submit name=b1 value=".$linie[0]."></form>";
            }
        }
        else
        {
        ?>
        <script type="text/javascript">
            alert("No match found");
</script>
<?php
        }
    }
    
    }
?>