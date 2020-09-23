<?php
        // put your code here


        require_once './Connectionfile.php';
        if(isset($_GET['id'])){
            $s_id = $_GET['id'];
            $query = "DELETE FROM `product` WHERE p_id = $s_id";
               
        if(mysqli_query($con, $query)){
             header('location:UserInterface.php');
             echo 'alert("Success")';
        } else {
            echo "fail";
        }
 
        }



?>
