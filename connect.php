<?php
  
    if(isset($_POST['submit']))
{
    $uploadok=1;
    $caleapoza_posibila="imagini1/".basename($_FILES['fis']['name']);
    if(file_exists($caleapoza_posibila))
    {
        echo "Change the photo";
        $uploadok=0;
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
        $nume=$_POST['fname'];
        $prenume=$_POST['lname'];
        $utilizator=$_POST['username'];
        $password=$_POST['password'];
        $ok=0;
            $p=password_hash($password,PASSWORD_DEFAULT);
        include("conectare.php");
        $interogare="insert into useri(username,password,poza_user,nume,prenume) values('$utilizator','$p','$caleapoza','$nume','$prenume')";
        if($error=mysqli_query($conn,$interogare))
        {
            ?>
                <script type="text/javascript">
                        alert("Connected");
                </script>
            <?php
        }
        else {
             ?>  <script type="text/javascript">
                        alert("Error");
                </script>
            <?php
        }
        mysqli_close($conn);
        }
        else
        {
            ?>  <script type="text/javascript">
                        alert("Choose another photo");
                </script>
            <?php
        }
        
    }
}


?>