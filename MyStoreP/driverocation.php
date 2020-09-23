<?php


require_once './Connectionfile.php';
        
    if(isset($_GET['latiu'])&&
            isset($_GET['longitu'])){
  
               $latiu = $_GET['latiu'];
        $longitu = $_GET['longitu'];
        $add = array($latiu,$longitu);
        $sadd = $add[0].",".$add[1];
        $query = "UPDATE `driver1` SET `latiu`= $latiu,`longu`= $longitu ,`addressd`= '$sadd' ,status = 'BUSY' WHERE `driver_id`=1";
            $querys = "SELECT * FROM store NATURAL JOIN order1 WHERE order1.o_id = 123 AND order1.s_id = store.s_id";  
         
          $results = mysqli_query($con, $querys);
            
           $nofrow = mysqli_num_rows($results);
          
      if( mysqli_query($con, $query)){
                 if($nofrow ==0 ){
          
               echo 'somting wrong'. mysqli_error($con);;
       } else {
             $row = mysqli_fetch_assoc($results);
             $stadd = $row['locationS'];
             
              echo $stadd;
       }
          }else {
             
          echo 'somting wrong'. mysqli_error($con);
       }
            }else{
                echo 'somthing wrong';
            }
        
        ?>
