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


<!--
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Ime i prezime:</label>
    <input type="text" class="form-control" id="name" placeholder="Unesite ime i prezime" name="name">
  </div>
  <div class="mb-3">
    <label for="adresa" class="form-label">Adresa:</label>
    <input type="text" class="form-control" id="adresa" placeholder="Unesite adresu" name="adresa">
  </div>
 
  <div class="mb-3">
    <label for="telefon" class="form-label">Telefon:</label>
    <input type="text" class="form-control" id="telefon" placeholder="Unesite telefon" name="telefon">
  </div>

  <div class="mb-3">
    <label for="godine" class="form-label">Godine:</label>
    <input type="text" class="form-control" id="godine" placeholder="Unesite godine" name="godine">
  </div>


  <button type="submit" class="btn btn-primary">Dodaj clana</button>
</form>

</div>

-->

<?php

//upit za prikaz svih clanova

//$sql = "SELECT * FROM clanovi";
//$rezultat = $conn->query($sql);

?>


<div class="container">

<div class="row justify-content-center">

<form action="insert.php" method="post">

    <div class="form-group">

    <label for=""> Ime i prezime: <input type="text" name="imeprezime" class="form-control"> </label>

    </div>

<div class="form-group">
<label for=""> Email: <input type="email" name="email" class="form-control">  </label>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text" name="adresa" class="form-control">  </label></div>
<div class="form-group"><label for=""> Telefon: <input type="text" name="telefon" class="form-control">  </label></div>
<div class="form-group"><label for=""> Godine: <input type="text" name="godine" class="form-control">  </label></div>


<div class="form-group">

<button type="submit"  name="submit">Dodaj clana</button>

</div>


</form>

</div>


  <table class="table table-striped">
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

<a href="clanovi.php?edit=<?php echo $row['idclana'];?>" class="btn btn-info">Izmeni</a>
<a href="delete.php?delete=<?php echo $row['idclana'];?>" class="btn btn-danger">Obrisi</a>

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