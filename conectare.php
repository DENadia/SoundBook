<?php
$servername="localhost";
$username="root";
$password="ancadia";
$dbname="soundbook";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Conexiune imposibila".mysqli_connect_error());
}
?>