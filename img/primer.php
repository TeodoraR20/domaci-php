<?php

require "bicikla.php";
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','rentabike');


$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($link === false){
    die("Error" . mysqli_connect_error());
}


if(isset($_GET['naziv'])){

    $categoryname = $_GET['naziv'];

    $sql="SELECT naziv FROM bicikle WHERE id=$categoryname";
    if($result = mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result)>0){
    
    while($row = mysqli_fetch_array($result)){
        
    $dbselected = $row['naziv'];
       
       
    
    }

    mysql_free_result($result);

}

else {

echo "Greska";

}

    }
}

//echo $options;
/*

 echo "<select>";
    foreach($options as $option){
        echo "<option vaule='$option'>$option</option>";
    }
    echo "</select>";
*/ 





/*  


$conn=mysqli_connect("localhost","root","","rentabike");

$query="select naziv from bicikle";

$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){



<option value="<?php echo $row['id'];?>">  <?php  echo ['naziv']; ?> </option>


}


*/ 

?>