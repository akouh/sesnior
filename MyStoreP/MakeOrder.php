<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './Connectionfile.php';

if (isset($_GET['submit'])) {
    $sid = array();
    $cartid = array();
    $data = array();

    foreach ($_GET['Mcheck'] as $value) {

        $cartid[] = $value;
        $query = "select * from add_to_cart WHERE `cart` IN ('$value') ";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $no = mysqli_num_rows($result);

        foreach ($result as $element) {
            $sid[] = $element['s_id'];
        }

        $all = ['ci' => $cartid, 'si' => $sid];
    }


    $t = $sid;
    $array = array_unique($t);
 
            foreach ($array as $el) {
        $i = 0;
      // $quey1 = "INSERT INTO `order1`(`o_id`, `u_id`, `s_id`, `p_id`, `d_id`, `total_price`, `quan`, `status`, `latiu`, `longu`, `loca`) VALUES (NULL,'$uidc','$sid','$idp',NULL,'$tp',$quan,'waiting for confirmation'); SET @oid = LAST_INSERT_ID();";
               foreach ($t as $value1) {
            // print_r($array);
              
            if ($el == $value1) {
                $query1 = "select * from add_to_cart WHERE `cart` IN ('$value') AND add_to_cart.s_id = '$el' ";
                $ci1[] = $all['ci'][$i];
                $si1[] = $all['si'];
                $all1 = ['ci1' => $ci1,'si' => $si1];
               
                   $result1 = mysqli_query($con, $query1); 
                 
                      
                          $nofr =  $nofrowspo = mysqli_num_rows($result1);
                          for($m = 0 ; $m <$nofr ; $m++){
                          $row1 = mysqli_fetch_array($result1);
                          $pid = $row1['p_id'];
                          $quan = $row1['quantity'];
                          $uid = $row1['u_id'];
                          $cart = $row1['cart'];
                          $price = $row['total_price'];
                          
                          $data = ['pid' => $pid ,'uid' => $uid, 'quant' => $quan,];
                          }
                        
                          
                  // header('location:UserInterface.php');
                         $pid1 = $data['pid'];
                     $uid1 = $data['uid']; 
                      $quan1 = $data['quant'];
                      
                          $query21 =  "INSERT INTO `order1`(`o_id`, `u_id`, `s_id`, `p_id`, `d_id`, `total_price`, `quan`, `status`, `latiu`, `longu`, `loca`)"
                      . "VALUES (NULL,'$uid1','$el','$pid1',NULL,'0','0','waiting for confirmation','0','0','0');";
                    $result12 = mysqli_query($con, $query21);
               
             //     
               
                 if( $result12){
                     
                      $last_id = mysqli_insert_id($con);
              
                      $query2 = "INSERT INTO `basket`(`ord_id`, `p_id`, `quan`, `price`) VALUES ('$last_id' , '$pid1' , '$quan1' , '$price');";
                    $result2 = mysqli_query($con, $query2); 
                   if($result12){
                    $query3 = "DELETE FROM `add_to_cart` WHERE `cart`= '$value' " ;
                    $result3 = mysqli_query($con, $query3);
                   if($result){   
                       header('location:UserInterface.php'); 
                   }else{
                        echo "failure1".mysqli_error($con);
                   }
                   } else {
                        echo "failure2".mysqli_error($con);
                        }
                     
                 } else {
                     echo "failure3".mysqli_error($con);
          //            $message = "Warning :Each order must be specified from the same store";
            //    echo "<script type='text/javascript'>alert('$message');"
              //          . "window.location.href='UserInterface.php';</script>";
                
                 }
               
              
         } else {
               $query1 = "select * from add_to_cart WHERE `cart` IN ('$value') AND add_to_cart.s_id = '$el' ";
                $ci1[] = $all['ci'][$i];
                $si1[] = $all['si'];
                $all1 = ['ci1' => $ci1,'si' => $si1];
               
                   $result1 = mysqli_query($con, $query1); 
                 
                      
                          $nofr =  $nofrowspo = mysqli_num_rows($result1);
                          for($m = 0 ; $m <$nofr ; $m++){
                          $row1 = mysqli_fetch_array($result1);
                          $pid = $row1['p_id'];
                          $quan = $row1['quantity'];
                          $uid = $row1['u_id'];
                          $cart = $row1['cart'];
                          $price = $row['total_price'];
                          
                          $data = ['pid' => $pid ,'uid' => $uid, 'quant' => $quan,];
                          }
                        
                          
                  // header('location:UserInterface.php');
                         $pid1 = $data['pid'];
                     $uid1 = $data['uid']; 
                      $quan1 = $data['quant'];
                      
                          $query21 =  "INSERT INTO `order1`(`o_id`, `u_id`, `s_id`, `p_id`, `d_id`, `total_price`, `quan`, `status`, `latiu`, `longu`, `loca`)"
                      . "VALUES (NULL,'$uid1','$el','$pid1',NULL,'0','0','waiting for confirmation','0','0','0');";
                    $result12 = mysqli_query($con, $query21);
               
             //     
               
                 if( $result12){
                     
                      $last_id = mysqli_insert_id($con);
              
                      $query2 = "INSERT INTO `basket`(`ord_id`, `p_id`, `quan`, `price`) VALUES ('$last_id' , '$pid1' , '$quan1' , '$price');";
                    $result2 = mysqli_query($con, $query2); 
                   if($result12){
                    $query3 = "DELETE FROM `add_to_cart` WHERE `cart`= '$value' " ;
                    $result3 = mysqli_query($con, $query3);
                   if($result3){   
                       header('location:UserInterface.php'); 
                   }else{
                        echo "failure1".mysqli_error($con);
                   }
                   } else {
                        echo "failure2".mysqli_error($con);
                        }
                     
                 } else {
                     echo "failure3".mysqli_error($con);
          //            $message = "Warning :Each order must be specified from the same store";
            //    echo "<script type='text/javascript'>alert('$message');"
              //          . "window.location.href='UserInterface.php';</script>";
                
                 }
               
              
         
   //      $message = "Warning :Each order must be specified from the same store";
     //           echo "<script type='text/javascript'>alert('$message');"
       //                 . "window.location.href='UserInterface.php';</script>";
                }
        $i++;
}
}//   
    }




  //$t = $element;
//    $array = array_unique($t);
            //print_r($array)