<?php

require "conn.php";

if(isset($_POST['submit'])){

//code...

$animals = $_POST['animals'];
$sql = "INSERT INTO zivotnije(id,animal) VALUES ('$animals')";

if(!mysqli_query($conn,$sql)){
    echo "Data is not inserted";
}
else{
    echo "Data is inserted";
}
}

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

<label for="animal">Izaberi zivotinju:</label>

<select name="animals" id="animal">

<option >Izaberite</option>

<option value="dog">Dog</option>
<option value="cat">Cat</option>
<option value="lion">Lion</option>
<option value="elephant">Elephant</option>


</select>


<br> <br>

<input type="submit" name="submit" value="Submit">

</div>


</form>

</body>
</html>