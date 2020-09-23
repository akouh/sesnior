<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        require_once "./Connectionfile.php";
        
        $id = $_GET['id'];
        
        $query = "delete FROM product  ";
        if (mysqli_query($con, $query)) {
            echo 'success';
        } else {
            echo "fail";
        }
        
        
    ?>