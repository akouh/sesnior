<?php


require_once './Connectionfile.php';
        
    if(isset($_GET['latiu'])&&
            isset($_GET['longitu'])){
  
               $latiu = $_GET['latiu'];
        $longitu = $_GET['longitu'];
        
        $query = "UPDATE `order1` SET `status`= 'Done' WHERE `d_id` = '1'";
           
         
      if( mysqli_query($con, $query)){
                 if($nofrow ==0 ){
          
               echo 'somting wrong'. mysqli_error($con);;
       } else {
           echo 'success';
       }
          }else {
             
          echo 'somting wrong'. mysqli_error($con);
       }
            }else{
                echo 'somthing wrong';
            }
        
        ?>
