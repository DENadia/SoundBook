<html>
 <head><title>Actions</title>
</head>
    <link type="text/css" rel="stylesheet" href="css/comedie.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", charset="utf-8">
<body>
 <button class="open-button" onclick="openForm()">Insert Movie</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container" enctype="multipart/form-data" method="post">
    <select name="tip">
        <option value="SF">SF</option>
        <option value="Drama">Drama</option>
        <option value="Comedy">Comedy</option>
        <option value="Thriller">Thriller</option>
    </select><br>
    <input type="text" name="denumire" required placeholder="Movie name"><br>
      <select name="anp">
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
    </select><br>
    <input type="file" name="fis" id="fis"> <br>
    <input type="submit" value="Apply" name="submit4"><br>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<button class="open-button1" onclick="openForm1()">Delete Movie</button>

    <div class="form-popup1" id="myForm1">
    <form action="" method="post" class="form-container">
       <?php
        session_start();
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
        <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
    </form>
    </div>
    <button class="open-button2" onclick="openForm2()">Delete Soundtrack</button>

    <div class="form-popup2" id="myForm2">
        <form action="" method="post" class="form-container">
        <input type="text" name="denumire" placeholder="Song Name" required><br>
        <input type="submit" name="trimite1" value="Delete">
            <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
    </form>
    </div>
    <button class="open-button3" onclick="openForm3()">Delete Artist</button>
    <div class="form-popup3" id="myForm3">
        <form action="" method="post" class="form-container">
        <input type="text" name="pseudonim" placeholder="Pseudoname" required><br>
        <input type="submit" name="trimite2" value="Delete">
            <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
    </form>
    </div>
    <button class="open-button4" onclick="openForm4()">Delete Song Artist</button>
    <div class="form-popup4" id="myForm4">
        <form action="" method="post" class="form-container">
        <input type="text" name="titlu" placeholder="Song Name" required><br>
        <input type="submit" name="trimite" value="Delete">
            <button type="button" class="btn cancel" onclick="closeForm4()">Close</button>
    </form>
    </div>
    <button class="open-button5" onclick="openForm5()">Insert Song Artist</button>
    <div class="form-popup5" id="myForm5">
    <form action="" method="post" class="form-container">
        <input type="text" name="titlu" placeholder="Song Name" required><br>
        <input type="text" name="cale" required placeholder="Song code"><br>
        <input type="text" name="id_interpret" placeholder="Singer" required><br>
        <input type="submit" name="submit1" value="Apply">
        <button type="button" class="btn cancel" onclick="closeForm5()">Close</button>
    </form></div>
    <button class="open-button6" onclick="openForm6()">Insert Artist</button>
    <div class="form-popup6" id="myForm6">
    <form action="" method="post" enctype="multipart/form-data" class="form-container">
    <input type="text" name="nume" placeholder="Name"><br>
    <input type="text" name="bsaua" required placeholder="Band/Singer"><br>
    <input type="text" name="data_n" required placeholder="First Performance"><br>
    <input type="text" name="pseudonim" required placeholder="Pseudoname"><br>
    <input type="file" name="fis" id="fis"> <br>
    <input type="submit" value="Apply" name="submit3"><br>
        <button type="button" class="btn cancel" onclick="closeForm6()">Close</button>
</form></div>
    <button class="open-button7" onclick="openForm7()">Insert Soundtrack</button>
    <div class="form-popup7" id="myForm7">
     <form action="" method="post" class="form-container">
        <input type="text" name="denumire" placeholder="Song Name" required><br>
        <input type="text" name="cale" required placeholder="Song code"><br>
        <input type="text" name="interpret" placeholder="Singer" required><br>
        <input type="text" name="id_film" placeholder="Id film" required><br>
        <input type="submit" name="submit10" value="Apply">
         <button type="button" class="btn cancel" onclick="closeForm7()">Close</button>
    </form></div>
    <button class="open-button8"><a href="primapaginaadmin.php"><font color="white">Vision it</font></a></button>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
<script>
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
    <script>
function openForm3() {
  document.getElementById("myForm3").style.display = "block";
}

function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}
</script>
    <script>
function openForm4() {
  document.getElementById("myForm4").style.display = "block";
}

function closeForm4() {
  document.getElementById("myForm4").style.display = "none";
}
</script>
        <script>
function openForm5() {
  document.getElementById("myForm5").style.display = "block";
}

function closeForm5() {
  document.getElementById("myForm5").style.display = "none";
}
</script>
     <script>
function openForm6() {
  document.getElementById("myForm6").style.display = "block";
}

function closeForm6() {
  document.getElementById("myForm6").style.display = "none";
}
</script>
    <script>
function openForm7() {
  document.getElementById("myForm7").style.display = "block";
}

function closeForm7() {
  document.getElementById("myForm7").style.display = "none";
}
</script>
</body>
</html>
<?php
  
    if(isset($_POST['submit4']))
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
        $tip=$_POST['tip'];
        $denumire=$_POST['denumire'];
        $anp=$_POST['anp'];
        $ok=0;
        include("conectare.php"); //testeaza daca artistul exista
            $q="select count(denumire) from filme where denumire='$denumire'";
            if($r=mysqli_query($conn,$q))
            {
                
            $linie=mysqli_fetch_array($r);
            $nr=$linie[0];
            if ($nr==0)
            {
            $interogare="insert into filme(tip,denumire,anp,poza) values('$tip','$denumire','$anp','$caleapoza')";
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
?><script>location.replace("actiuni.php");</script><?php 
    }
}
?>
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
       ?><script>location.replace("actiuni.php");</script><?php 
    }
?>
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
    ?><script>location.replace("actiuni.php");</script><?php     
    }
?>
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
        ?><script>location.replace("actiuni.php");</script><?php 
    }
?>
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
        ?><script>location.replace("actiuni.php");</script><?php 
    }
?>
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
     ?><script>location.replace("actiuni.php");</script><?php    
    }
?>
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
        ?><script>location.replace("actiuni.php");</script><?php 
}
?>
<?php
    if(isset($_POST['submit10']))
    {
        include("conectare.php");
        $denumire=$_POST['denumire'];
        $cale=$_POST['cale'];
        $interpret=$_POST['interpret'];
        $id=$_POST['id_film'];
        $sql="Insert into soundtrack (denumire,cale,interpret,id_film) values ('$denumire','$cale','$interpret','$id')";
        if(mysqli_query($conn,$sql))
        {
            ?>   <script type="text/javascript">
                        alert("Added");
                </script>
            <?php         

        }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
        ?><script>location.replace("actiuni.php");</script><?php 
    }
?>