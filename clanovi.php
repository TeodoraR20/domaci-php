<?php


require "conn.php";
require "clan.php";

session_start();

//vrati sve clanove iz baze




$clanovi = Clan::vratiSve($conn);



if(!$clanovi){
    echo "Nastala je greska pri izvodjenju upita.";
    die();
}

else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>


    <title>Rent a bike</title>

<style>

body {
  background-image: url("img/clanovi.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px;
}

</style>

</head>
<body>

<?php

include "head.php";?>

<h1 style="text-align:center;">Članovi</h1>




<?php

//upit za prikaz svih clanova

//$sql = "SELECT * FROM clanovi";
//$rezultat = $conn->query($sql);

?>


<?php
if(isset($_SESSION['message'])):
?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php
echo $_SESSION['message'];
unset ($_SESSION['message']);

?>
</div>
<?php endif?>

<div class="container">

<div class="row justify-content-center">

<form action="insert.php" method="post" align="center">






    <div class="form-group">

    <label for=""> Ime i prezime: <input type="text" name="imeprezime"  class="form-control"> </label>

    </div>

<div class="form-group">
<label for=""> Email: <input type="email"  name="email" class="form-control">  </label>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text"  name="adresa" class="form-control">  </label></div>
<div class="form-group"><label for=""> Telefon: <input type="text"  name="telefon" class="form-control">  </label></div>
<div class="form-group"><label for=""> Godine: <input type="text"  name="godine" class="form-control">  </label></div>

<br>
<div class="form-group">

<button type="submit"  name="submit" class="btn btn-primary">Dodaj clana</button>

</div>

<br>
</form>

</div>


  <table class="table table-success table-striped ">
  
    <thead>
      <tr>
        <th>Redni broj</th>
        <th>Ime i prezime</th>
        <th>Email</th>
        <th>Adresa</th>
        <th>Telefon</th>
        <th>Godine</th>
        
        <th colspan="2">Izaberi</th>
      </tr>
    </thead>
    <tbody>
    <?php

$sr=1;
												
while($row=$clanovi->fetch_array()){
 ?>
      <tr>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row["imeprezime"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["adresa"] ?></td>
        <td><?php echo $row["telefon"] ?></td>
        <td><?php echo $row["godine"] ?></td>

        <td>
 
<a href="edit.php?editid=<?php echo $row['id'];?>" class="btn btn-info">Izmeni</a>
<a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Obrisi</a>

        </td>
       
      </tr>
      
    </tbody>




    <?php 
  $sr++;
  
  } ?>
  </table>






</div>





</body>
</html>




<?php } ?>   
</body>
</html>

