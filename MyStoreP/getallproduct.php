<?php



require_once './Connectionfile.php';

$getallproduct = "SELECT * FROM product";
$result = mysqli_query($con, $getallproduct);
$retrn_Array = array();


while ($row = mysqli_fetch_assoc($result) ) {
    $row_Array['id'] = $row['p_id'];
    $row_Array['pbr'] = $row['brand'];
    
    $row_Array['pcat'] = $row['category'];
    $row_Array['pcolor'] = $row['color'];
    $row_Array['pdesc'] = $row['description'];
    $row_Array['price'] = $row['price'];
    $row_Array['imageView'] = $row['imagename'];
    array_push($retrn_Array, $row_Array);
    
    
}
echo json_encode($retrn_Array);
?>