<table border="1">

<tr>

<th>Name</th>
<th>Address</th>
<th>Phone number</th>
<th>Result</th>

</tr>

<?php

$connect=mysqli_connect("localhost","root","","rentabike") or die("Connection failed.");
$query = "select ko.*,bi.naziv from korisnici ko, bicikle bi where ko.idbicikle=bi.id";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td>  <?php echo $row['ime'];?> </td>
<td>  <?php echo $row['prezime'];?> </td>
<td>  <?php echo $row['godine'];?> </td>
<td>  <?php echo $row['naziv'];?> </td>

</tr>

<?php

}
?>

