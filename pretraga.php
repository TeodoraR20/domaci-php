<?php

include "conn.php";

if(isset($_POST['input'])){

$input = $_POST['input'];

$query = "SELECT * FROM clanovi WHERE imeprezime LIKE '%{$input}%' OR adresa LIKE '%{$input}%' OR email LIKE '%{$input}%' OR telefon LIKE '%{$input}%' OR godine LIKE '%{$input}%'";



$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){ ?>

<table class="table table-success table-striped">

<thead>

<tr>
    <th>ID</th>
    <th>Ime i prezime</th>
    <th>Email</th>
    <th>Adresa</th>
    <th>Telefon</th>
    <th>Godine</th>
</tr>

</thead>
<tbody>

<?php while($row = mysqli_fetch_assoc($result)){
    
$id = $row['id'];
$imeprezime = $row['imeprezime'];
$email = $row['email'];
$adresa = $row['adresa'];
$telefon = $row['telefon'];
$godine = $row['godine'];

?>

<tr>

<td>  <?php  echo $id; ?> </td>
<td>  <?php  echo $imeprezime; ?> </td>
<td>  <?php  echo $email; ?> </td>
<td>  <?php  echo $adresa; ?> </td>
<td>  <?php  echo $telefon; ?> </td>
<td>  <?php  echo $godine; ?> </td>

</tr>

<?php
}
 ?>

</tbody>


</table>


<?php

}else{

echo "<h6 class='text-danger text-center mt-3'>Nisu pronadjeni podaci</h6>";

}


}

?>