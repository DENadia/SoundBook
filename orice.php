<html>
    <head><title>Inregistrare film</title></head>
    <link type="text/css" rel="stylesheet" href="css/inregistrare.css">
<body bgcolor="#1e1e1e">
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="nume" required placeholder="Name"><br>
    <input type="text" name="bsaua" required placeholder="Band/Singer"><br>
    <input type="text" name="data_n" required placeholder="First Performance"><br>
    <input type="text" name="pseudonim" required placeholder="Pseudoname"><br>
    <input type="file" name="fis" id="fis"> <br>
    <input type="submit" value="Apply" name="submit3"><br>
</form>
</body>
</html>
<?php
include("conectare.php");
 $nume=$_POST['nume'];
        $bsaua=$_POST['bsaua'];
        $data_n=$_POST['data_n'];
        $pseudonim=$_POST['pseudonim'];

//se verifica daca studentul care se doreste sa se insereze nu exista deja in baza de date
//daca nu exista, se insereaza; daca exista, se afiseaza un mesaj de eroare
$query=mysqli_query("select count(*) from artists where pseudonim='$pseudonim'");
$row=mysqli_fetch_row($query);
$nr=$row[0];
if ($nr==0){
// adăugare cu parametri
$query1=mysqli_query("insert into artists (nume,bsaua,data_n,pseudonim) values('$nume','$bsaua','$data_n','$pseudonim')");
$query2=mysqli_query("select * from artists where pseudonim='$pseudonim'");

//calculeaza nr. de inregistrari returnate prin interogare
$nr_inreg=mysqli_num_rows($query2);
if ($nr_inreg>0){
 echo "<table border='2' align='center'>";
 $coln=mysqli_num_fields($query2); //nr. de campuri
 echo"<tr bgcolor='silver'>";

 // realizare automată a capului de tabel (conţinând toate câmpurile)
 for ($i=0; $i<$coln; $i++){
 //numele câmpurilor ca şi cap de tabel
 $var=mysql_field_name($query2,$i);
 echo "<th> $var </th>";
 }
 echo"</tr>";

 // afiseaza inregistrarile gasite in urma interogarii
 while($row=mysqli_fetch_row($query2)){
 echo"<tr>";
 foreach ($row as $value){
 echo "<td>$value</td>";
 }
 echo"</tr>";
 }
 echo"</table>";
}
else{ 
 echo"<center>";
 echo "Nu s-a gasit nici o inregistrare!!!";
 echo"</center>";
}
}
else{
echo"<center>";
echo "Artistul exista deja";
echo"</center>";
}
mysql_close();
?>