<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Neovlašćeni serviser</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<nav class="navbar navbar-light "style="background-color:#ccffb3;">
<a button type="button" class="btn btn-outline-secondary" href="/noviSajt/baza.php">BAZA</a> </nav>
<body>
    <div class="container"  >
        <div class="row">
           
            <div class="col-sm" >
                <h1 style="font-size:30px;  margin: 50px;margin-left:90px; text-align:center;">Ubaci novog zaposlenog</h1>
                <form method="post" action="">
                    <div class="input-group"style=" margin:50px; ">
                        <div class="input-group-prepend" >
                            <span class="input-group-text"style="border:2px solid #6c757d;;height:38px; color: #6c757d;; background:#ccffb3; ">Ime i prezime:</span>
                        </div>
                        <input type="text" aria-label="Ime" class="form-control" name="ime"style="border:2px solid #6c757d;">
                        <input type="text" aria-label="Prezime" class="form-control" name="prezime"style="border:2px solid #6c757d;">
                        <input type="text" aria-label="Godine" class="form-control" name="godine"style="border:2px solid #6c757d;">
                        <input type="text" aria-label="Opstina" class="form-control" name="opstina"style="border:2px solid #6c757d;">
                    
<?php 

require "conn.php";
require "bicikla.php";
$options="SELECT naziv from bicikle";
echo "<select>";
foreach($options as $option){
    echo "<option vaule='$option'>$option</option>";
}
echo "</select>";
?>




                    
                    </div>

                    <div class="input-group mb-3"style=" margin:50px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"style="border:2px solid #6c757d; color:#6c757d; background:#ccffb3">Funkcija:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="funkcija" style="border:2px solid #6c757d; height:40px;">
                    </div>
                    <input type="submit" name="unos" value="Ubaci" style=" width: 90px;height: 40px;margin-left:50px; margin:20px margin-right:30px; border: 2px solid #6c757d; background:#ccffb3;color:#6c757d;"/>
                </form>
                <?php
                if (isset($_POST["unos"])) {
                    
                    $flag = 0;
                  
                    
                    if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['godine']) && $flag == 1) {
                        $ime = $_POST['ime'];
                        $prezime = $_POST['prezime'];
                        $funkcija = $_POST['funkcija'];
                        include "konekcija.php";
                        $sql = "INSERT INTO radnici (ime, prezime, funkcija) VALUES ('" . $ime . "', '" . $prezime . "', '" . $funkcija . "');";
                        if ($mysqli->query($sql)) {
                            echo "<p>Zaposleni je uspešno ubačen</p>";
                        } else {
                            echo "<p>Nastala je greška pri ubacivanju </p>" . $mysqli->error;
                        }
                    } else {
            
                        echo "Nisu prosleđeni parametri ili ste uneli nepostojecu funkciju!";
                    }
                    if ($flag == 1) {
                        $mysqli->close();
                    }
                }
                ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

</body>

</html>