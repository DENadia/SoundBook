<html>
    <head><title>Inregistrare film</title></head>
    <link type="text/css" rel="stylesheet" href="css/inregistrare.css">
<body bgcolor="#1e1e1e">
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="nume" placeholder="Name"><br>
    <input type="text" name="bsaua" required placeholder="Band/Singer"><br>
    <input type="text" name="data_n" required placeholder="First Performance"><br>
    <input type="text" name="pseudonim" required placeholder="Pseudoname"><br>
    <input type="file" name="fis" id="fis"> <br>
    <input type="submit" value="Apply" name="submit3"><br>
</form>
</body>
</html>
<?php
  
    if(isset($_POST['submit3']))
{
    $uploadok=1;
    $caleapoza_posibila="imagini1/".($_FILES['fis']['name']);
    if(file_exists($caleapoza_posibila))
    {
        $uploadok=0;
        echo "Change the photo";
    }
    else
    {
        if($_FILES['fis']['size']<=1000000000)
        {
            if(is_uploaded_file($_FILES['fis']['tmp_name']))
            {
                 move_uploaded_file($_FILES['fis']['tmp_name'], "imagini1/".$_FILES['fis']['name']);
            }
        
        $caleapoza="imagini1/".$_FILES['fis']['name'];
        $nume=$_POST['nume'];
        $bsaua=$_POST['bsaua'];
        $data_n=$_POST['data_n'];
        $pseudonim=$_POST['pseudonim'];
        $ok=0;
        include("conectare.php"); //testeaza daca artistul exista
            $q="select count(nume) from artists where nume='$nume'";
            if($r=mysqli_query($conn,$q))
            {
                
            $linie=mysqli_fetch_array($r);
            $nr=$linie[0];
            if ($nr==0)
            {
            $interogare="insert into artists(nume,bsaua,data_n,pseudonim,poza_a) values('$nume','$bsaua','$data_n','$pseudonim','$caleapoza')";
            if($error=mysqli_query($conn,$interogare))
            {
            ?>
                <script type="text/javascript">
                        alert("Added");
                </script>
            <?php
            }
            else
            {
             
                echo "Error";
            }
            }
             else 
            {   
           
                 echo "Added";
            }      
            }
            else
            {
                echo mysqli_error($conn);
            }
        
        }
        else
        {
            echo "Choose Another photo";
        }
        
    }
}
?>