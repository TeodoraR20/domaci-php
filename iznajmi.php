<?php

include "head.php";
require "conn.php";
require "clan.php";
require "bicikla.php";

if(isset($_POST['submit'])){

$opis = $_POST['opis'];
$imeprezime=$_POST['imeprezime'];
$minuti = $_POST['minuti'];
$cena = $_POST['cena'];

$sql = "INSERT INTO iznajmljivanja(id,imeprezime,opis,minuti,cena) VALUES ('','$imeprezime', '$opis','$minuti','$cena')  ";
if(!mysqli_query($conn,$sql))
{
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

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

<div class="container">
<!--
<form >

    <div class="form-group">

    <label for=""> Ime i prezime: <input type="text" name="imeprezime"> <br> </label>

    </div>

<div class="form-group">
<label for=""> Email: <input type="email" name="email"> <br> </label><br>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text" name="adresa"> <br> </label><br></div>
<div class="form-group"><label for=""> Telefon: <input type="text" name="telefon"> <br> </label><br></div>
<div class="form-group"><label for=""> Godine: <input type="text" name="godine"> <br> </label><br></div>



<button type="submit" name="submit">Submit</button>

</form>
-->



   
<form action="" method="POST">

<div class="column is-10">

<div class="select">

<select name="imeprezime" id="imeprezime">

<?php


$query = "SELECT imeprezime FROM clanovi";
$result = mysqli_query($conn,$query);
?>
<?php
while($row=mysqli_fetch_array($result)){



?>

<option value="<?php echo $row['imeprezime'];?>"> <?php echo $row['imeprezime'];?>  </option>

<?php }?>

</select>

<br>
<select name="opis" id="opis">
<?php


$query = "SELECT opis FROM bicikle";
$result = mysqli_query($conn,$query);
?>

<?php
while($row=mysqli_fetch_array($result)){

?>

<option value="<?php echo $row['opis'];?>"> <?php echo $row['opis'];?>  </option>

<?php }?>

</select>

<br>

<div class="form-group">

    <label for="">Minuti: <input type="text" name="minuti" class="form-control"> </label>

    </div>

    <div class="form-group">

<label for=""> Cena: <input type="text" name="cena" class="form-control"> </label>

</div>

<input type="submit" name="submit" value="Submit">

</div>

</div>


</div>

</form>


<!--
<div class="container">

<form class="form-inline" action="insert.php" method="post">
<div class="form-group">
    <label  class="sr-only">Ime i prezime:</label>
    <input type="text"  id="imeprezime">
  </div>
  <div class="form-group">
    <label >Email address:</label>
    <input type="email"  id="email">
  </div>
  <div class="form-group">
    <label >Adresa:</label>
    <input type="text"  id="adresa">
  </div>
  <div class="form-group">
    <label >Telefon:</label>
    <input type="text" id="telefon">
  </div>
  <div class="form-group">
    <label >Godine:</label>
    <input type="text"  id="godine">
  </div>
  
  <button type="submit"  name="submit">Submit</button>
</form>
-->

<!--
<form action="" method="POST">
<select name="opis" >

<?php
$query = "SELECT opis FROM bicikle";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
  ?>


<option value="<?php echo $row['opis'];?>"> <?php echo $row['opis'];?>  </option>
<?php
}

?>

</select>

<button type="submit"  name="submit">Submit</button>

</form>

-->
</div>
</body>
</html>