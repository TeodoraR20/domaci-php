<?php

require "conn.php";

$sql = "SELECT * FROM bicikle WHERE opis LIKE'%".$_POST['name']."%' ";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assocc($result)){

echo "

<tr>
<td>".$row['slika']."</td>
<td>".$row['opis']."</td>
<td>".$row['lokacija']."</td>

</tr>

";


}

}

else{

echo "<tr><td>0 result found</td></tr>";

}
?>