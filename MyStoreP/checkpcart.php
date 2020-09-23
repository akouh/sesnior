<?php
 
require_once './Connectionfile.php';


echo "hello world1";
if(isset($_POST['recipient'])){
   echo "hello world2";
    
    $my_id = $_POST["recipient"];

  $query = mysqli_query($con,"SELECT * FROM product WHERE p_id = '$my_id' ");

   $resultprnca = mysqli_query($con, $queryPrnca);
     $nofrowsprnca = mysqli_num_rows($resultprnca);
 
     echo "hello world3";
}
?>
