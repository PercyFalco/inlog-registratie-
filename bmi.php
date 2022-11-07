<?php 
include "./connect_db.php";
include "./functions.php";

function bmi($mass,$height) {
    $bmi = $mass/($height*$height);
    return $bmi;
} 



if($_POST['submit']) { 
    $mass = $_POST['mass'];
    $height = $_POST['height'];

    if (strpos($height, ',') !== false) {
        $height = floatval(str_replace(',', '.', $height));
    }

    $bmi = bmi($mass,$height);
    if ($bmi <= 18.5) {
        $output = "Ondergewicht";
    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
        $output = "Normaal gewicht";
    } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $output = "Over gewicht";
    } else if ($bmi > 30.0) {
        $output = "Obesitas";
    }
    $id = $_SESSION["id"];
    $sql = "INSERT INTO `bmi` (`id`,`height`,`weight`,`bmi`) VALUES ('$id','$height','$mass','$bmi')";
    $result = mysqli_query($conn, $sql); 

echo "Your BMI value is " . $bmi . " and you are : "; 
echo $output;
}
?>