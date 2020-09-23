<?php


require_once './Connectionfile.php';
        
    if(isset($_GET['latiu'])&&
            isset($_GET['longitu'])){
  
               $latiu = $_GET['latiu'];
        $longitu = $_GET['longitu'];
        $add = array($latiu,$longitu);
        $sadd = $add[0].",".$add[1];
        $query = "UPDATE `driver1` SET `latiu`= $latiu,`longu`= $longitu ,`addressd`= '$sadd' ,status = 'BUSY' WHERE `driver_id`=1";
            $querys = "SELECT * FROM user NATURAL JOIN order1 WHERE order1.o_id = 123 AND order1.u_id = user.u_id";  
         
          $results = mysqli_query($con, $querys);
            
           $nofrow = mysqli_num_rows($results);
          
      if( mysqli_query($con, $query)){
                 if($nofrow ==0 ){
          
               echo 'somting wrong'. mysqli_error($con);;
       } else {
             $row = mysqli_fetch_assoc($results);
             $uadd = $row['loca'];
             $phone = $row['phone'];
             $udata = $uadd;
              echo $udata.','.$phone;
       }
          }else {
             
          echo 'somting wrong'. mysqli_error($con);
       }
            }else{
                echo 'somthing wrong';
            }
        
        ?>
