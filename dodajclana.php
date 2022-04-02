<?php
include "head.php";

require "conn.php";
require "domain/clan.php";

require "dodavanje.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <title>Document</title>
</head>
<body>
   
<h1 style="text-align:center;">Forma za dodavanje novog clana</h1>

<div class="container">

<form action="dodavanje.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Ime i prezime:</label>
    <input type="text" class="form-control" id="name" placeholder="Unesite ime i prezime" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Unesite email" name="email">
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


  <button type="submit" class="btn btn-primary" name="submit">Dodaj clana</button>
</form>


</div>



</body>
</html>