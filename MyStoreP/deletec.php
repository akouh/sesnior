<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './Connectionfile.php';
if(isset($_GET['cid'])){
   $cartid = $_GET['cid'];
   $querydcart = "DELETE FROM `add_to_cart` WHERE cart = $cartid";
    if($resultd1 = mysqli_query($con, $querydcart)){
        header('location:UserInterface.php');
        }else {
            echo "failure".mysqli_error($con);
            
}

} else {
    
     echo 'somthing wrong';
 }



?>