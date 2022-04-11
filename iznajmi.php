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
  //echo "Data is inserted";
$alert = "<script> alert('Data is inserted');  </script>";
echo $alert;

//header('Location: iznajmi.php');
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

  

    <style>

body {
  background-image: url("img/iznajmi2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px;
}

p{

margin-top: 45px;

}

h2{
margin-top:10px;

}

</style>

    <title>Document</title>
</head>
<body>

<div class="container">

<h2 align="center">Iznajmi biciklu</h2>

   
<form action="" method="POST" align="center">

<div class="column is-10">

<div class="select">

<p> Ime i prezime člana: <br>
<select name="imeprezime" id="imeprezime">  </p> <br>
 <br>
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

<label for="">Bicikla:</label> <br>
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





<div class="form-group">

    <label for="">Minuti: <input type="text" name="minuti" class="form-control"> </label>

    </div>

    <div class="form-group">

<label for=""> Cena: <input type="text" name="cena" class="form-control"> </label>

</div>
<br>
<input type="submit" class="btn btn-primary" name="submit" value="Iznajmi">

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