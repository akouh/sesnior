<?php

require_once './Connectionfile.php';

if (isset($_GET['email']) &&
        isset($_GET['pass'])
) {
    $emch = $_GET['email'];
    $pasch = $_GET['pass'];

    $querych = "SELECT * FROM `user` WHERE email = '$emch' AND password = '$pasch'";
    $querychd = "SELECT * FROM `driver1` WHERE email = '$emch' AND password = '$pasch'";
    $resultd = mysqli_query($con, $querychd);
    $result = mysqli_query($con, $querych);

    if (mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_assoc($result);
        $uid = $row['u_id'];
        echo "user";
    } elseif (mysqli_num_rows($resultd) != 0) {
        
             
                 $rowd = mysqli_fetch_assoc($resultd);
        $did = $rowd['driver_id'];
        
          $querychdon = "UPDATE `driver1` SET `status`= 'online' WHERE `driver_id`= $did";
                $resultdon =mysqli_query($con, $querychdon);
             
               
            echo 'driver';

    } else {
        echo '-1';
    }
}
?>