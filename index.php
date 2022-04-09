<?php

//require dbBroker.php

//require "model/prijava.php"

/*
session_start();
if(!isset($_SESSION['user_id'])){

header('Location:index.php');
exit();
}
*/

require "conn.php";

require "bicikla.php";

$bicikle = Bicikla::vratiSveBicikle($conn);

if(!$bicikle){
  echo "Greska";
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

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <?php
    include('head.php');
    ?>

<style>

body {
  background-image: url("img/rent.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px;
}

</style>

    <title>Iteh aplikacija</title>
</head>
<body>


<!--

<div class="p-5 bg-primary text-center text-color:white">
  <h1>Rent a bike</h1>
  
</div>
-->


<h1 style=" text-align:center">Bicikle</h1>


<div class="container">
<div class="row justify-content-center">
<form action="index.php" method="post">
<div class="form-group">

    <label for=""> Pronadji biciklu: <input type="text"  id="search" class="form-control" placeholder="Pretraga po opisu"> </label>
<button class="btn btn-primary">Pretraga</button>
    </div>

    </form>

    </div>
</div>
<br>



<div class="container">
<table class="table table-success table-striped">
  
<thead>
    <tr>
      <th scope="col">Redni broj</th>
      <th scope="col">Slika</th>
      <th scope="col">Opis</th>
      <th scope="col">Lokacija</th>
      
    </tr>
  </thead>
  <tbody id="output">
<?php 

$sr=1;
while($row=$bicikle->fetch_array()){?>

    <tr>
      <!--<th scope="row">1</th>-->
     <td><?php echo $sr; ?></td> 
      <td>  
    <img src="data:image/jpg;charset=utf8;base64,<?php  echo base64_encode($row['slika']); ?>" width="200" height="100">
      </td>
      <td><?php echo $row["opis"] ?></td>
      <td><?php echo $row["lokacije"] ?></td>
      
      
    </tr>
    
    
  </tbody>
<?php

$sr++;

}
?>

</table>



</div>

<?php

}
?>

<script type="text/javascript">

$(document).ready(function(){

$("#search").keypress(function(){

$.ajax({

type:'POST',
url:'pretraga.php',
data:{
  name:$("#search").val(),
},

success:function(data){
  $("#output").html(data);
}

});

});


});

</script>

</body>
</html>


