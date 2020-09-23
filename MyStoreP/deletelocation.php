<?php


require_once './Connectionfile.php';
        
    if(isset($_GET['latiu'])&&
            isset($_GET['longitu'])){
        $did = $_GET['driver_id'];
               
        $query = "UPDATE `driver1` SET `status` = 'offline' WHERE `driver_id`= '1'";
           $nofrow = mysqli_query($con, $query);
      if($nofrow !=0 ){
  echo "Sussecc";
             
          }else {
             
          echo 'somting wrong'. mysqli_error($con);
       }
            }else{
                echo 'somthing wrong';
            }
        
        ?>
