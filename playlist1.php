<html>
<head>
	<link rel="shortcut icon" href="title.ico">
    <link type="text/css" href="css/playlist2.css" rel="stylesheet">
	<title>Artists Playlist</title>
    <meta charset="utf-8">
</head>
<body>
   <div>
   	<table class="canvas">
   		<tr>
   			<td class="video" rowspan="2"><iframe width="600" height="310" src="https://www.youtube.com/embed/I9QGpHScGug" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
   			<td class="name">Best
   				<p><h5 class="category">Artists</h5><h5 class="range">Songs</h5>
   			</td>
   		</tr>
   		<tr>
   			<td class="list" valign="middle">
   				<section class="list">
   				<?php
                    include("conectare.php");
                   if(isset($_POST['b1']))
                   {
                       $denf=$_POST['artist'];
                       $sql="SELECT a.titlu, a.cale from piese a INNER JOIN artists b ON a.id_interpret=b.id_artist where b.pseudonim='$denf'";
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
                                        <?php echo $linie[0];?></a></p><hr color=grey><?php 
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