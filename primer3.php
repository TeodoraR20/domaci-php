<?php

require "conn.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">

<div style="text-align:center;">

<label for="bicikla">Izaberite biciklu:</label>

<select name="bicikle" id="bicikla">

<?php


$conn=mysqli_connect("localhost","root","","rentabike") or die("Neuspesna konekcija");
$query1 = "SELECT naziv FROM bicikle";

$result1 = mysqli_query($query1);

while($row=mysqli_fetch_array($conn,$result1)){
    ?>

    <option > <?php echo $row['naziv']; ?> </option>

  <?php
}

?>


</select>


</div>

</form>


</body>
</html>