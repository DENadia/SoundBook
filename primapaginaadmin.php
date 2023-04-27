<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin menu</title>
        <link href="css/primapagina.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="primapaginaadmin.php">Sound<span>B</span>ook</a></h1>
                <ul>
                    <li><a href="primapaginaadmin.php">Home</a></li>
                    <li><a href="artisti.php">Artists</a></li>
                    <li><a href="band.php">Bands</a></li>
                    <li><a href="filmem.php">SoundTrack</a></li>
                    <li><a href="actiuni.php">Actions</a></li>
                    <li><a href="deconectare.php">Disconnect</a></li>
                    
                </ul>
            </nav>
        </div>
            <div class="heading">
                <button class="register">
                <a href="#modal" class="registerLink">Change password</a>
            </button>
            </div>
            <div class="modal_container" id="modal">
            <div class="modal">
                <a href="#" class="close">X</a>
                <span class="modal_heading">
                    ENTER YOUR DETAILS
                </span>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="password" name="pveche" placeholder="Enter your old password * " required><br>
                    <input type="password" name="pnoua" placeholder="Enter your new password*" required><br>
                    <input type="password" name="repnoua" placeholder="Repeat your new password*" required> <br> 
                    <input type="submit" class="btnRegister" value="REGISTER" name="submit2">
                </form>
            </div>
        </div>
</header>
    </body>
</html>
<?php	
if(isset($_POST['submit2']))
                    {
                        include("conectare.php");
                         $pv=$_POST['pveche'];
                         $pn=$_POST['pnoua'];
                         $rpn=$_POST['repnoua'];
                         session_start();
                         $user=$_SESSION['admin'];
                         $sql="SELECT password from useri where username='$user'";
                         if($r=mysqli_query($conn,$sql))
                         {
                             $linie=mysqli_fetch_array($r);
                             if(password_verify($pv,$linie[0]))
                             {
                                 if($pn==$rpn)
                                 {
                                $pnn=password_hash($pn,PASSWORD_DEFAULT);
                                $sql="UPDATE useri SET password='$pnn' where username='$user'";
                                     if($r=mysqli_query($conn,$sql))
                                         ?><script>alert("Parolă modificată cu succes");</script>
                             <?php
                                         
                                 }
                                 else
                                 {
                    ?><script>alert("Parolele nu corespund");</script>
                   
                                <?php
                                      }
                                     
                             }
                             else
                             {
                                     ?><script>alert("Parolă actuală incorectă");</script>
                    
                                <?php
                                 }
                             
                         }
                         else echo"eroare";
                         
                    }
?>