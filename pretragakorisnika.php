<?php

include "head.php";

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
  

<div class="container">

<br>

<h2 align="center">Pretraga clanova</h2>


<div class="form-group">

<div class="input-group">

<span class="input-group-addon"> Pretrazi </span> <br>
<input type="text" name="search_text" id="search_text" placeholder="Pretrazi korisnika" class="form-control">

</div>

</div>

<br>

<div id="result"></div>

</div>

</body>
</html>

<script>
$(document).ready(function(){

$('#search_text').keyup(function(){

var txt = $(this).val();

if(txt !='')
{
  $('#result').html('');
  $.ajax({

url:"fetch.php";
method:"post",
data:{search:txt},
dataType:"text",
success:function(data)
{
  $('#result').html(data);
}

}else{
  

  });
}


});

});


</script>
