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
  

<div class="container" style="max-width: 50%;">

<div  class="text-center mt-5 mb-4">

<h2>PHP MySQL Live Search</h2>

</div>

<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search...">





</div>


<div id="searchresult">



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

$("#live_search").keyup(function(){

var input = $(this).val();
//alert(input);

if(input !=""){

$.ajax({

url:"pretraga2.php",
method:"POST",
data:{input:input},

success:function(data){

$("#searchresult").html(data);
$("#searchresult").css("display","block");

}

});

}else{


    $("#searchresult").css("display","none");

}

});

});

</script>


</body>
</html>


