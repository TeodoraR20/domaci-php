<?php


 class Clan{

public $idclana;
public $imeprezime;
public $email;
public $adresa;
public $telefon;
public $godine;


public function __construct($idclana=0,$imeprezime=null, $email=null,$adresa=null,$telefon=null,$godine=null){

$this->idclana = $idclana;
$this->imeprezime = $imeprezime;
$this->email = $email;
$this->adresa = $adresa;
$this->telefon = $telefon;
$this->godine = $godine;

}

//vrati sve clanove

public static function vratiSve(mysqli $conn)
{
    $sql = "SELECT * FROM clanovi";
    return $conn->query($sql);
}

public static function add(Clan $clan, mysqli $conn){

$sql = "INSERT INTO clanovi(imeprezime,email,adresa,telefon,godine) VALUES ('$clan->imeprezime','$clan->email','$clan->adresa','$clan->telefon','$clan->godine')";


return $conn->query($sql);

}


}


?>