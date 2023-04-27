<?php
include("conectare.php");
$output='';
if(isset($_POST['searchVal']))
{
    $searchq=$_POST['searchVal'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query=mysqli_query("SELECT * from filme WHERE titlu LIKE '%$searchq%'") or die("could not search");
    
    $count=mysqli_num_rows($query);
    if($count==0)
    {
        $output='There were no search results!';
    }
    else
    {
        while($r=mysqli_fetch_array($query))
        {
            $titlu=$r['tilu'];
            $id=$r['id_film'];
            $output.= '<div>'.$titlu.' ';
        }
    }
}
echo "$output";
?>