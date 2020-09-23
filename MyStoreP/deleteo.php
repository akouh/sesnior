<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './Connectionfile.php';
if(isset($_GET['oid'])){
   $oid = $_GET['oid'];
   $querydo = "DELETE FROM `order1` WHERE o_id = $oid";
    if($resultdo = mysqli_query($con, $querydo)){
        header('location:UserInterface.php');
        }else {
            echo "failure".mysqli_error($con);
            
}

} else {
    
     echo 'somthing wrong';
 }



?>


