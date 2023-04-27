<html>
    <head><title>Inregistrare film</title></head>
    <link type="text/css" rel="stylesheet" href="css/inregistrare.css">
<body bgcolor="#1e1e1e">
<form action="" method="post" enctype="multipart/form-data">
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
</form>
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
        
    }
}
?>