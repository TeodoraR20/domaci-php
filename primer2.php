<?php 

require "conn.php";
require "bicikla.php";

if(isset($_POST['submit'])){

$bicikle= $_POST['bicikle'];
$sql = "INSERT INTO prijava (idprijave,nazivbicikle,nazivkorisnika) values('$bicikle')";

if(!mysqli_query($conn,$sql)){
  echo "Data is not inserted";
}
else{

echo "Data is  inserted";

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


<div class="select">

<select  name="bicikle" id="bicikla">
 <option value="">Izaberite biciklu</option>

<?php



$query1 = "SELECT naziv FROM bicikle";



$result1 = mysqli_query($conn,$query1);

while($row=mysqli_fetch_array($result1)){
    ?>

    <option > <?php echo $row['naziv']; ?> </option>

  <?php
}

?>

</select>

</div>



</div>

<input type="submit" name="submit" value="Submit">

</form>


</body>
</html>