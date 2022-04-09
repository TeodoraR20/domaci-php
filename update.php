<?php
include "conn.php";

if(isset($_POST['update'])){

$imeprezime = $_POST['imeprezime'];
$email = $_POST['email'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$godine = $_POST['godine'];
$idclana = $_POST['idclana'];

$result = mysqli_query($conn, 
                       "UPDATE clanovi SET (imeprezime = '$imeprezime', email = '$email', adresa = '$adresa', telefon='$telefon', godine='$godine') WHERE idclana='$idclana'");

if($result){

return 'data updated';

}


}


?>