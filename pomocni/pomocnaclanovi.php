<?php


require "conn.php";
require "clan.php";
require "update.php";
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

<form action="insert.php" method="post">

    <div class="form-group">

    <label for=""> Ime i prezime: <input type="text" name="imeprezime" class="form-control" > </label>

    </div>

<div class="form-group">
<label for=""> Email: <input type="email" name="email" class="form-control"   >  </label>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text" name="adresa" class="form-control"  >  </label></div>
<div class="form-group"><label for=""> Telefon: <input type="text" name="telefon" class="form-control"  >  </label></div>
<div class="form-group"><label for=""> Godine: <input type="text" name="godine" class="form-control"  >  </label></div>


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
      <!--<tr id="<?php echo $row['id'];?>">-->
      <tr>
        <td><?php echo $sr; ?></td>
        <td data-target="imeprezime"><?php echo $row["imeprezime"] ?></td>
        <td data-target="email"><?php echo $row["email"] ?></td>
        <td data-target="adresa"><?php echo $row["adresa"] ?></td>
        <td data-target="telefon"><?php echo $row["telefon"] ?></td>
        <td data-target="godine"><?php echo $row["godine"] ?></td>

        <td>

<!--<button  name="update" data-role="update" data-id="" class="btn btn-info">Izmeni</button>-->
<a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Obrisi</a>

        </td>
       <td>

       <input type="button" name="edit" value="Edit" id="<?php echo $row['id'];?>" class="btn btn-info edit_data">
       </td>

      </tr>
      
    </tbody>

    <?php 
  $sr++;
  
  } ?>
  </table>

  <!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
-->

  </div>

  

<!-- Modal 
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <div class="form-group">

<label for=""> Ime i prezime: <input type="text" id="imeprezime" name="imeprezime" class="form-control" > </label>

</div>

<div class="form-group">
<label for=""> Email: <input type="email" id="email" name="email" class="form-control"   >  </label>
</div>

<div class="form-group"><label for=""> Adresa: <input type="text" id="adresa" name="adresa" class="form-control"  >  </label></div>
<div class="form-group"><label for=""> Telefon: <input type="text" id="telefon" name="telefon" class="form-control"  >  </label></div>
<div class="form-group"><label for=""> Godine: <input type="text" id="godine"name="godine" class="form-control"  >  </label></div>
-->
<!--<input type="hidden" id="userId" class="form-control">-->

<!--
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Zatvori</button>
        <a href="#"   id="save" class="btn btn-primary pull-right">Izmeni</a>
      </div>
    </div>
  </div>
</div>
-->

</body>
<!--
<script>

$(document).ready(function(){

$(document).on('click','a[data-role=update]',function(){

//alert($(this).data('id'));

var id = $(this).data('id');
var imeprezime = $('#'+id).children('td[data-target=imeprezime]').text();
var email = $('#'+id).children('td[data-target=email]').text();
var adresa = $('#'+id).children('td[data-target=adresa]').text();
var telefon = $('#'+id).children('td[data-target=telefon]').text();
var godine = $('#'+id).children('td[data-target=godine]').text();

$('#imeprezime').val(imeprezime);
$('#email').val(email);
$('#adresa').val(adresa);
$('#telefon').val(telefon);
$('#godine').val(godine);
$('#userId').val(idclana);
$('#myModal').modal('toggle');

});



$('#save').click(function(){

var id = $('#userId').val();

var imeprezime = $('#imeprezime').val();
var email = $('#email').val();
var adresa = $('#adresa').val();
var telefon = $('#telefon').val();
var godine = $('#godine').val();

$.ajax({

url: 'update.php';
method: 'post',
data : {imeprezime: imeprezime, email: email, adresa: adresa, telefon: telefon, godine: godine, idclana: idclana},


success: function(response){

console.log(response);

$('#'+id).children('td[data-target=imeprezime]').text(imeprezime);
$('#'+id).children('td[data-target=email]').text(email);
$('#'+id).children('td[data-target=adresa]').text(adresa);
$('#'+id).children('td[data-target=telefon]').text(telefon);
$('#'+id).children('td[data-target=godine]').text(godine);

$('#myModal').modal('toggle');


}

});


});

});

</script>
-->
</html>





<?php } ?>


</body>
</html> 