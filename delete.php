<?php

require "conn.php";

require "clan.php";

session_start();

if(isset($_GET['delete'])){

$id = $_GET['delete'];

$sql = mysqli_query($conn,"DELETE FROM clanovi WHERE id=$id");
 

}

$_SESSION['message']="Clan je obrisan.";
$_SESSION['msg_type'] = "danger";
header('Location:clanovi.php');

?>