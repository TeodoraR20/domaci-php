<?php



require "conn.php";
$output = '';

$sql = "SELECT * FROM clanovi WHERE imeprezime LIKE '%".$_POST["search"]."%'  ";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

$output .='<h4 align="center">Rezultati pretrage</h4>';

$output .= '<div class="table-responsive">

<table class="table table bordered">

<tr> 

<th>Ime i prezime</th>
<th>Email</th>
<th>Adresa</th>
<th>Telefon</th>
<th>Godine</th>

</tr>

</div>';
/*
while($row = mysqli_fetch_array($result))
{

$output .= '

<tr>

<td> '.$row["imeprezime"].'  </td>
<td> '.$row["email"].'  </td>
<td> '.$row["adresa"].'  </td>
<td> '.$row["telefon"].'  </td>
<td> '.$row["godie"].'  </td>

</tr>

';

}
*/
echo $output;


}else{
    echo "Data not found";
}
?>