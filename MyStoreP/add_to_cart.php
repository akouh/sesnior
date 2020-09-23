<?php
require_once './Connectionfile.php';
if(isset($_GET['id'])&&
isset($_GET['uid'])){
    $id = $_GET['id'];
    $uid = $_GET['uid'];
    
    $quantity = $_GET['quantity'];
    
     $queryPr = "SELECT * FROM product WHERE p_id = '$id' ";
        $resultpr = mysqli_query($con, $queryPr);
        $nofrow = mysqli_num_rows($resultpr);
        if ($nofrow != 0) {
          $row = mysqli_fetch_assoc($resultpr);
           $pic = $row['imagename'];
           $id1 = $row['p_id'];
           $cat = $row['category'];
           
           
           $brand=$row['brand'];
                $size= $row['size'];
                $color= $row['color'];
                $warr= $row['warranty']; 
           $price=$row['price'];
           $desc = $row['description'];
           $sum = ($price * $quantity + 3);
           
           ?>
<html>

    <head>

        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet"
              type="text/css"
              href="mystyle.css"/>
                <style>
            form{
                display: block;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
               
            }
           
        </style>
        

          <script>
function goBack() {
  window.history.back();
}
</script>
 </head>

    <body   style="background-image:url(https://images.pexels.com/photos/2680270/pexels-photo-2680270.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)">





        <div class="modal-content " style=" border-radius: 60px;top: 20%; left: 20%; margin-top: -50px; margin-left: -380px" >

            <form  action="addtocart.php" method="GET" >
                        <div id="col1" style="width:100%; float:left;height:420px;">

                            
                            <div id="col2" style="position: relative;right:-80px" >
                               <div style=" w3-text-align: left; float:left; "> 
                            <img src="uploads/<?= $pic ?>" style=" height:200px" alt="">
                             
                              </div>
                                <div class="block " style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;" ><b>Category:</b> </label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $cat ?> </b></label>
                                </div>
                                <div class="block " style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Product name:</b> </label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $brand ?> </b></label>
                                </div>

                                <div class="block" style="position: relative;right:-80px" >
                                    <label class="w3-text" style="color: brown;"><b>Brand:</b> </label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $brand ?> </b></label>
                                </div>
                                <div class="block" style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Size:</b> </label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $size ?> </b></label>
                                </div>
                                <div class="block" style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Color:</b> </label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $color ?> </b></label>
                                </div>
                                <div class="block" style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Description:</b> </label>
                                    
                                    <label  class="w3-text" style="color: blue;"><b> <?= $desc?> </b></label>
                                </div>
                                <div class="block" style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Warranty:</b> </label> 
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $warr ?> </b></label>
                                </div>
                                <div class="block" style="position: relative;right:-80px" >
                                    <label  class="w3-text" style="color: brown;"><b>Quantity:</b></label>
                                    <label  class="w3-text"  style="color: blue;"><b> <?= $quantity ?> </b></label>
                                </div>
                               
                                <div class="center"  >
                                    <br>
                                    <hr style="height:5px; background-color:red;">

                                </div><div class="block" style="position: relative;right:-350px" >
                                    <label  class="w3-text" style="color: brown;"><b>Product price:</b> </label>
                                        <input type="hidden" id="pprice" value="<?= $price ?>"/>
                                        <label  class="w3-text"  style="color: red;" ><b><?= $price ?> $</b> </label>
                                       
                                        <br>

                                        <label  class="w3-text" style="color: brown;"><b>Delivery fee\'s:</b> </label>
                                        
                                        <label  class="w3-text"  style="color: red;" ><b>3 $</b> </label>
                                       
                                        <br>

                                        <label  class="w3-text" style="color: brown;"><b>Total price: </b> </label>
                                        
                                        <label id="result" style="color: red" ><b><?= $sum?> $</b>
                                        </label>
                                </div>
                                        <br/>
                                        <input type="button" onclick="goBack()" class="btn-danger btn-lg" id="back"  value="<<back"/>
                                        <input type="hidden" id="idid" name="idid" value="<?=$id1?>"/>
                                        <input type="hidden" id="uid" name="uid" value="<?=$uid?>"/>
                                        <input type="hidden" id="quantity" name="quantity" value="<?=$quantity?>"/>
                                        <input type="hidden" id="total_price" name="total_price" value="<?=$sum?>"/>
                                        <input type="submit" class="btn-success btn-lg"  style="float: right" value="add to card">
                                    
                                </div>

                            </div>
                            </form>
                        </div>
                    
                
            
    </body>
</html>

       <?php
  
        } else {
            echo 'Sorry Not Available !';
            echo $id;
        }
} else {
    echo 'somthing wrong!';
}
?>
