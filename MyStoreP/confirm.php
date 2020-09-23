<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './Connectionfile.php';

if(isset($_GET['oid'])){
   $o_id = $_GET['oid'];
   $querydou = "UPDATE order1 SET `status`= 'ORDER COMFIRMED' WHERE o_id = $o_id";
    if($resultdou = mysqli_query($con, $querydou)){
        header('location:Adminpage.php');
        }else {
            echo "failure".mysqli_error($con);
            
}

} else {
    
     echo 'somthing wrong';
 }



?>