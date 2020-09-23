<?php

require_once './Connectionfile.php';

if(isset($_GET['idid']) 
        && isset($_GET['uid'])){
    $id2 = $_GET['idid'];
    
    $queryPr = "SELECT * FROM product WHERE p_id = '$id2' ";
        $resultpr = mysqli_query($con, $queryPr);
        $nofrow = mysqli_num_rows($resultpr);
        if ($nofrow != 0) {
          $row = mysqli_fetch_assoc($resultpr);
          $p_id = $row['p_id'];
          $s_id = $row['id_s'];
          $uid = $_GET['uid'];
          $quantity = $_GET['quantity'];
          $tprice = $_GET['total_price'];
          $querycart = "INSERT INTO `add_to_cart`(`cart`, `u_id`, `p_id`, `s_id`, `quantity`, `total_price`, `status`) VALUES (NULL,$uid,$p_id,$s_id,$quantity,$tprice,'In My Cart')";
                   //echo '<script>alert(Image Insertd into Database)</script>';
                    //$newid = mysqli_insert_id($con);
                    // success
                  if(mysqli_query($con, $querycart)) {
                    //echo '<script>alert(Image Insertd into Database)</script>';
                    //$newid = mysqli_insert_id($con);
                    // success
                    echo "success";
                    header('location:UserInterface.php');
                    
                  
                }
                }else{
                    echo "somthing is wrong". mysqli_error($con);
        } }else {     
            echo "something is wrongGGG!";
        }
         ?>

        