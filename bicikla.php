<?php

require "conn.php";

class Bicikla{


public $id;
public $naziv;
public $cena;

public function __construct($id=null, $naziv=null,$cena=null)
{

$id = $this->$id;
$naziv = $this->$naziv;
$cena = $this->$cena;

}


public static function getNaziv(mysqli $conn)
{
    $query = "SELECT naziv FROM bicikle";
   return $conn->query($query);
}

}







?>