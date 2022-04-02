<?php

require "../conn.php";
require "../domain/clan.php";
if(isset($_POST['submit'])){


    if(isset($_POST['imeprezime'])
    && isset($_POST['email']) && isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['godine'])){
    
    $clan=new Clan(null,$_POST['imeprezime'],$_POST['email'],$_POST['adresa'],$_POST['telefon'],$_POST['godie']);
    
    $status = Clan::add($clan,$conn);
    
    
    if($status){
    
    echo 'Success';
    
    }else{
        echo $status;
        echo 'Failed';
    }
    
    }


}




?>