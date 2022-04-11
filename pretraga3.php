<?php

include "conn.php";

if(isset($_POST['input'])){

$input = $_POST['input'];

$query = "SELECT * FROM bicikle WHERE opis LIKE '%{$input}%' OR lokacije LIKE '%{$input}%'  ";



$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){ ?>

<table class="table table-success table-striped">

<thead>

<tr>
    <th>ID</th>
    <th>Slika</th>
    <th>Opis</th>
    <th>Lokacije</th>
    
</tr>

</thead>
<tbody>

<?php while($row = mysqli_fetch_assoc($result)){
    
$id = $row['id'];
$slika = $row['slika'];
$opis = $row['opis'];
$lokacije = $row['lokacije'];


?>

<tr>

<td>  <?php  echo $id; ?> </td>
<td>  
    <img src="data:image/jpg;charset=utf8;base64,<?php  echo base64_encode($row['slika']); ?>" width="200" height="100">
      </td>
<td>  <?php  echo $opis; ?> </td>
<td>  <?php  echo $lokacije; ?> </td>


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