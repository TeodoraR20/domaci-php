<?php

require "conn.php";
/*
$imeprezime = '';
$email = '';
$adresa = '';
$telefon = '';
$godine = '';
*/

if(isset($_GET['edit'])){
    $idclana = $_GET['edit'];

    $result = $conn->query("SELECT imeprezime,email,adresa,telefon,godine FROM clanovi WHERE idclana=$idclana");

    $row=$result->fetch_array();
    $imeprezime = $row['imeprezime'];
    $email = $row['email'];
    $adresa = $row['adresa'];
    $telefon = $row['telefon'];
    $godine = $row['godine'];

    header("Location:clanovi.php");

}

?>