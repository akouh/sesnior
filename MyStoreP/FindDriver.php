<?php
require_once './Connectionfile.php';
    if(isset($_GET['latiu'])&&
            isset($_GET['longitu']) &&
            $_GET['o_id']){
  
               $latiu = $_GET['latiu'];
        $longitu = $_GET['longitu'];
        $o_id = $_GET['o_id'];
        
          $queryu = "UPDATE `order1` SET `latiu`= '$latiu ', longu=' $longitu' , loca = '$latiu,$longitu'  WHERE o_id = '123' ";
            $result = mysqli_query($con, $queryu);
        $query = "SELECT  `latiu`, `longu`, `addressd` FROM `driver1`";
            $result = mysqli_query($con, $query);
      
        $querys = "SELECT * FROM store NATURAL JOIN order1 WHERE order1.o_id = 123 AND order1.s_id = store.s_id";  
         
          $results = mysqli_query($con, $querys);
            
           $nofrow = mysqli_num_rows($results);
           

        if($nofrow ==0 ){
          
               echo 'somting wrong'. mysqli_error($con);;
       } else {
             $row = mysqli_fetch_assoc($results);
             $latis =$row['latis'];
             $longs = $row['lo'];
          $queryUP= "UPDATE `driver1` SET `distance`=(ACOS(SIN($latis  * PI() / 180) * SIN(latiu * PI() / 180) + COS($latis  * PI() / 180) * COS(latiu * PI() / 180) * COS(($longs - longu) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) ";   
          $queryf = "SELECT * FROM driver1 ";
          $resultf = mysqli_query($con, $queryf);
                $nofrowf = mysqli_num_rows($resultf);
                 $distance = 0;
                $rowf = mysqli_fetch_array($resultf);
                    for($i =1 ;$i < $nofrowf;$i++){
                         
                        $dist = $rowf['distance'];
                        $latid = $rowf['latiu'];
                        $longd = $rowf['longu'];
                            $add = $rowf['addressd'];
                            $did = $rowf['driver_id'];
                            $ph = $rowf['phone'];
                            if($distance <= $dist){
                                $queryud = "UPDATE `order1` SET `d_id`= $did Where o_id = 116";
                                
                                  $resultud = mysqli_query($con, $queryud);
                     $distance = $dist;
                      echo $add.','.$ph;
                     
                 }else{
                 
                     echo 'No Driver available to deliver , Store will contact with you' ;
                 }
                    
                    }
       
                 }
   }else {
        echo 'shomthing wornggg';
       }

?>