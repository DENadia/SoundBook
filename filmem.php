<html>
    <head><title>Movie's menu</title>
        <meta charset="utf-8">
         <link type="text/css" rel="stylesheet" href="css/filmem.css">
    </head>
   
<body>
    <?php
    session_start();
    $_SESSION['verif']=-1;
    ?>
<div class="container">
  <a href="thriller.php"><div class="box">
    <img src="imagini/thriller.jpg">
      <span>Thriller</span>
    </div></a>
  <a href="comedie.php"><div class="box">
    <img src="imagini/comedie.jpg">
    <span>Comedy</span>
      </div></a>
  <a href="drama.php"><div class="box">
    <img src="imagini/drama.jpg">
    <span>Drama</span>
      </div></a>
  <a href="sf.php"><div class="box">
    <img src="imagini/fsf.jpg">
    <span>SF</span>
      </div></a>
</div>
</body>
    </html>