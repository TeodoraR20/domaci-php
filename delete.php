<?php

require "conn.php";

require "clan.php";


if(isset($_GET['delete'])){

$idclana = $_GET['delete'];

$sql = mysqli_query($conn,"DELETE FROM clanovi WHERE idclana=$idclana");
 

}


header('Location:clanovi.php');

?>