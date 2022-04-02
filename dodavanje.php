<?php
require "conn.php";

if(isset($_POST['submit'])){

    if(isset($_POST['imeprezime'])
    && isset($_POST['email']) && isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['godine'])){
    
$imeprezime = $_POST['imeprezime'];
$email = $_POST['email'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$godine = $_POST['godine'];
    

$query = "INSERT INTO clanovi(imeprezime,email,adresa,telefon,godine) VALUES ($imeprezime, $email, $adresa, $telefon, $godine )";

$run = new mysqli($conn,$query) or die(mysqli_error());
  
if($run){
    echo "Form submitted";
}
else{
    echo "Form not submitted.";
}
}
else{

echo "All fields required.";

}
}

?>