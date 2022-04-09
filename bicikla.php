<?php

require "conn.php";

class Bicikla{


public $id;
public $slika;
public $opis;
public $lokacije;
public function __construct($id=null, $slika=null,$opis=null,$lokacije=null)
{

$id = $this->$id;
$slika = $this->$slika;
$opis = $this->$opis;
$lokacije = $this->$lokacije;

}


public static function getNaziv(mysqli $conn)
{
    $query = "SELECT naziv FROM bicikle";
   return $conn->query($query);
}


public static function vratiSveBicikle(mysqli $conn)
{
    $sql = "SELECT slika,opis,lokacije FROM bicikle";
    return $conn->query($sql);
}

}







?>