<?php


require "conn.php";

$id = $_GET['editid'];

$sql = "SELECT imeprezime,email,adresa,telefon,godine FROM clanovi WHERE id=$id";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$imeprezime=$row['imeprezime'];
$email=$row['email'];
$adresa=$row['adresa'];
$telefon=$row['telefon'];
$godine=$row['godine'];

if(isset($_POST['submit'])){

$imeprezime = $_POST['imeprezime'];
$email = $_POST['email'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$godine = $_POST['godine'];

$sql = "UPDATE clanovi SET imeprezime='$imeprezime',email='$email',adresa='$adresa',telefon='$telefon',godine='$godine' WHERE id=$id";
 
$result = mysqli_query($conn,$sql);

if($result){

//echo "Updated successfully";

header('Location:clanovi.php');

}else{
    //die(mysqli_error($conn));

    echo "NOT UPDATED";
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
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


</head>
<body>

    <?php
    include "head.php";
    ?>

    <div class="container">
<form action="" method="post">






<div class="form-group">

<label for=""> Ime i prezime: <input type="text" name="imeprezime" value="<?php echo $imeprezime;?>" class="form-control"> </label>

</div>

<div class="form-group">
<label for=""> Email: <input type="email"  name="email" value="<?php echo $email;?>" class="form-control">  </label>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text"  name="adresa" value="<?php echo $adresa;?>" class="form-control">  </label></div>
<div class="form-group"><label for=""> Telefon: <input type="text"  name="telefon" value="<?php echo $telefon;?>"  class="form-control">  </label></div>
<div class="form-group"><label for=""> Godine: <input type="text"  name="godine"  value="<?php echo $godine;?>" class="form-control">  </label></div>


<div class="form-group">

<button type="submit"  name="submit">Izmeni</button>

</div>
</div>

</form>
</body>
</html>