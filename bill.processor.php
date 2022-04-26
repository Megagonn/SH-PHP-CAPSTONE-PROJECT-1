<?php
session_start();
if (isset($_POST['bill'])) {
    // echo 'hiiiii';
    $units = $_POST['units'];
    if ($units<1) {
        $_SESSION['result'] = "minimum unit is 1";
    } else{
        if ($units > 0 && $units <= 50) {
            $units= (floatval($units)  * 3.5);
        } elseif ($units <= 150) {
            $units= (floatval($units)  * 4.0);
        } elseif ($units <= 250) {
            $units= (floatval($units)  * 5.2);
        } elseif ($units > 250) {
            $units= (floatval($units)  * 6.5);
        }
        $_SESSION['result'] = "NGN. $units";
        header('location: bill.php');
    }
    
}

?>