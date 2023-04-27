<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guest</title>
        <link href="css/meniuprincipal.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="primapaginaguest.php">Sound<span>B</span>ook</a></h1>
                <ul>
                    <li><a href="primapaginaguest.php">Home</a></li>
                    <li><a href="artisti.php">Artists</a></li>
                    <li><a href="band.php">Bands</a></li>
                    <li><a href="soundtrack.php">SoundTrack</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                </ul>
            </nav>
        </div>
            <div class="heading">
                <button class="register">
                <a href="#modal" class="registerLink">REGISTER NOW</a>
            </button>
            </div>
            <div class="modal_container" id="modal">
            <div class="modal">
                <a href="#" class="close">X</a>
                <span class="modal_heading">
                    ENTER YOUR DETAILS
                </span>
                <form action="" method="post" enctype="multipart/form-data">>
                    <input type="text" name="fname" placeholder="First Name * " required><br>
                    <input type="text" name="lname" placeholder="Last Name *" required><br>
                    <input type="text" name="username" placeholder="Username* " required><br>
                    <input type="password" name="password" placeholder="Password*" required> <br>   
                     <input type="password" name="pst" placeholder="Repeat password*" required> <br> 
                    <input type="file" name="fis" id="fis"> <br>
                    <input type="submit" class="btnRegister" value="REGISTER" name="submit">
                </form>
                <a href="index1.php" class="signin">
                    Have an account already?
                </a>
                
            </div>
        </div>
</header>
    </body>
    <script type="text/javascript">alert("You do not have an account. Acces denied")</script>
</html>
<?php
  
    if(isset($_POST['submit']))
{
    $uploadok=1;
    $caleapoza_posibila="imagini2/".basename($_FILES['fis']['name']);
    if(file_exists($caleapoza_posibila))
    {
       ?>  <script type="text/javascript">
                        alert("Choose another photo");
                </script>
            <?php
        $uploadok=0;
    }
    else
    {
        if($_FILES['fis']['size']<=1000000000)
        {
            if(is_uploaded_file($_FILES['fis']['tmp_name']))
            {
                 move_uploaded_file($_FILES['fis']['tmp_name'], "imagini2/".$_FILES['fis']['name']);
            }
        
        $caleapoza="imagini2/".$_FILES['fis']['name'];
        $nume=$_POST['fname'];
        $prenume=$_POST['lname'];
        $utilizator=$_POST['username'];
        $password=$_POST['password'];
        $p1=$_POST['pst'];
        $ok=0;
            if($password==$p1)
            {
             $p=password_hash($password,PASSWORD_DEFAULT);
            include("conectare.php");
            $interogare="insert into useri(username,password,poza_user,nume,prenume) values('$utilizator','$p','$caleapoza','$nume','$prenume')";
            if($error=mysqli_query($conn,$interogare))
            {
                header("Location: primapaginalog.php");
            }
            else 
            {
             ?>  <script type="text/javascript">
                        alert("Error");
                </script>
            <?php
        }
            }
            else
            {
                ?>  <script type="text/javascript">
                        alert("Passwords do not match");
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