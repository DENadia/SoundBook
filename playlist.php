<html>
<head>
	<link rel="shortcut icon" href="title.ico">
    <link type="text/css" href="css/playlist2.css" rel="stylesheet">
	<title>Movie's Playlist</title>
    <meta charset="utf-8">
</head>
<body>
   <div>
   	<table class="canvas">
   		<tr>
   			<td class="video" rowspan="2"><iframe width="600" height="310" src="https://www.youtube.com/embed/AdQ3JDLlmPI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
   			<td class="name">Oscar
   				<p><h5 class="category">Movies</h5><h5 class="range">Soundtrack</h5>
   			</td>
   		</tr>
   		<tr>
   			<td class="list" valign="middle">
   				<section class="list">
   				<?php
                    include("conectare.php");
                   if(isset($_POST['b1']))
                   {
                       $denf=$_POST['film'];
                       $sql="SELECT a.denumire, a.cale, a.interpret from soundtrack a INNER JOIN filme b ON a.id_film=b.id_film where b.denumire='$denf'";
                       if($r=mysqli_query($conn,$sql))
                       {
                           if(mysqli_num_rows($r))
                           {
                               $q=1;
    
                               while($linie=mysqli_fetch_array($r))
                               {
                                   ?><p><?php echo $q;
                                   $cale=$linie[1];?> 
                                    <a href=""><iframe width=300px src="<?php echo $linie[1];?>"></iframe>
                                        <?php echo $linie[2]." - ".$linie[0];?></a></p><hr color=grey><?php 
                                   $q++; 
                                   
                               }
                           }
                       }
                   }
                ?>
                </section>
   			</td>
   		</tr>
   	</table>
 
   </div>
</body>
</html>