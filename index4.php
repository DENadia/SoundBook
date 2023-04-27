
<?php
    session_start();
    if(isset($_SESSION['admin']))
    {
        header("Location: primapaginaadmin.php");
    }
    else
    {
        header("Location: primapaginalog.php");
    }
?>