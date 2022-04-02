<?php

include "head.php";

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

<form action="insert.php" method="post">

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

</div>
   



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



</div>
</body>
</html>