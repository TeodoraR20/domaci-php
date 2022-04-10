<?php
/*
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";


$conn = new mysqli($server,$username,$password,$dbname);

*/

require "conn.php";

require "clan.php";

session_start();


$imeprezime = '';
$email = '';
$adresa = '';
$telefon = '';
$godine = '';

if(!$conn){
    echo "There are some problems with connecting the database.";
}


//there are no errors

if(isset($_POST['submit'])){

    if(isset($_POST['imeprezime']) && isset($_POST['email']) &&  isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['godine'])){

        $imeprezime = $_POST['imeprezime'];
        $email = $_POST['email'];
        $adresa = $_POST['adresa'];
        $telefon = $_POST['telefon']; 
        $godine = $_POST['godine']; 




       // $sql = "INSERT INTO clanovi(imeprezime,email,adresa,telefon,godine) VALUES ('$imeprezime','$email','$adresa','$telefon','$godine')";
    $clan = new Clan(null,$imeprezime,$email,$adresa, $telefon,$godine);

        //$insert = mysqli_query($conn,$sql);
        
        $status = Clan::add($clan,$conn);
        
        if(!$status){
            echo "There are some problems with data";
        }else{
           // echo "Data inserted";

           $_SESSION['message']="Clan je uspesno sacuvan";
$_SESSION['msg_type'] = "success";

            header('Location: clanovi.php');
        }

    }
/*
    $imeprezime = $_POST['imeprezime'];
    $email = $_POST['email'];
    $adresa = $_POST['adresa'];
    $telefon = $_POST['telefon']; 
    $godine = $_POST['godine']; 
    
   */

}


/*

if(isset($_POST['imeprezime']) && isset($_POST['email']) &&  isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['godine'])){


    $imeprezime = $_POST['imeprezime'];
    $email = $_POST['email'];
    $adresa = $_POST['adresa'];
    $telefon = $_POST['telefon']; 
    $godine = $_POST['godine']; 
    
    $sql = "INSERT INTO clanovi(imeprezime,email,adresa,telefon,godine) VALUES ('$imeprezime','$email','$adresa','$telefon','$godine')";
    
    $insert = mysqli_query($conn,$sql);
    
    
    if(!$insert){
        echo "There are some problems with data";
    }else{
        echo "Data inserted";
    
        
    }

}


*/



?>