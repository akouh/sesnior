<?php

session_start();
if (isset($_SESSION['islogin']) &&
        $_SESSION['islogin'] == 1) {
    $s_id = $_SESSION['s_id'];
    require_once './Connectionfile.php';         
} else {
    header('location:index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet"
              type="text/css"
              href="mystyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



        <style>
            body {
  display: block;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  color: khaki;
  font-weight: bold;
}
input{
    color: black;
}
select{
    color: black;
}
textArea{
    color: black;
}
tr{
    border-style: dashed;
    border-color: white;
    width: 50px;
    height: 50px;
    
}
td{
    
    font-weight: bold;
}

        </style>
        <title></title>
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav" >
            <li class="nav-item"><a class="nav-link" href="Adminpage.php">ADD Product</a></li>
            <li class="nav-item"><a class="nav-link" href="Storys.php">Order DONE</a></li>
            <li class="nav-item"><a class="nav-link" href="My_Page.php">My Page</a></li>
            <li class="nav-item" ><a class="nav-link" href="UserInterface.php" >User Interface</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle fas fa fa-shopping-cart" title="My trolley" style="font-size:20px;color:black" href="#" id="navbardrop" data-toggle="dropdown">
                        
                       </a>
                        
                        <?php
                        $querycarts = "SELECT * FROM add_to_cart WHERE s_id = $s_id";
                        $resultsc = mysqli_query($con, $querycarts);
                        $nofrowsc = mysqli_num_rows($resultsc);
                        
                        if ($nofrowsc == 0) {
                            ?><div class="dropdown-menu"> 
                                <table class="table table-sm table-dark ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="align-items: center">
                                            <td> nothing in MY cart</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>  
                            <?php
                        } else {
                            ?>
                        
                        <div class="dropdown-menu" > 
                         <table class="table table-sm table-dark table-hover "  style="border: 20px">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="text-align: center" >#</th>
                                            
                                             <th scope="col" style="text-align: center" >Check</th>
                                            <th scope="col" style="text-align: center" >Image</th>
                                            <th scope="col" style="text-align: center" >Name</th>
                                            <th scope="col" style="text-align: center" >quantity</th>
                                            <th scope="col" style="text-align: center" >price</th>
                                            <th scope="col" style="text-align: center" >status </th>
                                            <th scope="col" style="text-align: center" >Acton</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                          echo '<form  action="MakeOrder.php" method="GET">';
                                        for ($cn = 0; $cn < $nofrowsc; $cn++) {
                                            $rowc = mysqli_fetch_array($resultsc);
                                            $pidc = $rowc['p_id'];
                                          
                                            $queryp = "SELECT * FROM product WHERE p_id = $pidc";
                                            $resultp = mysqli_query($con, $queryp);
                                            $nofrowsp = mysqli_num_rows($resultp);
                                          
                                            for($cp = 0 ; $cp < $nofrowsp ; $cp++ ){
                                            $rowp = mysqli_fetch_array($resultp);
                                             $pic = $rowp['imagename']; ?>
                                
                                        <tr style="align-items: center;border-bottom: 2px solid red;" >
                                                <th scope="row" style="text-align: center;vertical-align: middle"><?= $rowc['cart'] ?></th>
                                                <th scope="row" style="text-align: center;vertical-align: middle"><input type="checkbox" name="Mcheck[]"  value="<?= $rowc['cart']?>"></th>
                                                <td style="width:120px; height:120px;text-align:center; vertical-align:middle">

                                                    <img src="uploads/<?= $pic ?>" class="img-responsive" style="max-height:120px; max-width:120px" />

                                                </td>

                                                <td style="text-align: center;vertical-align: middle"><?= $rowp['brand'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['quantity'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['total_price'] ?>$</td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['status'] ?></td>


                                                <td style="text-align: center;vertical-align: middle">
                                       
                                                   
                                                     


                                                    <a href="deletec.php?cid=<?php echo $rowc['cart'];?>"  class="btn btn-default bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-trash"></span> Clear
                                                    </a>
                                                </td>

                                            </tr>
                                     </form>
                                    <?php
                                        }
                                        }
                                          echo '<input type="submit" class="btn btn-primary bt-lg " name="submit" value="Make As Order"/>';
                                                echo  '</form> ' ;
                        }
                                
                                ?>
                                 
                            </tbody>
                            
                        </table>
                            
                            
                       
                   
                 </div>    
                          </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle fas fa fa-shopping-cart" title="My Order" style="font-size:20px;color:red" href="#!" id="navbardrop" data-toggle="dropdown">
                        
                       </a>
                        
                        <?php
                        $queryO = "SELECT * FROM order1 WHERE s_id = $s_id AND status<> 'done'";
                        $resulto = mysqli_query($con, $queryO);
                        $nofrowso = mysqli_num_rows($resulto);

                        if ($nofrowso == 0) {
                            ?><div class="dropdown-menu"> 
                                <table class="table table-sm table-dark ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="align-items: center">
                                            <td> No order yet</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>  
                            <?php
                        } else {
                            ?>
                        
                        <div class="dropdown-menu" > 
                         <table class="table table-sm table-primary table-hover "  style="border: 20px">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style="text-align: center" >#</th>
                                            <th scope="col" style="text-align: center" >Image</th>
                                            <th scope="col" style="text-align: center" >Name</th>
                                            <th scope="col" style="text-align: center" >quantity</th>
                                                                                        
                                            <th scope="col" style="text-align: center" >Customer Name </th>
                                            <th scope="col" style="text-align: center" >Customer Address </th>
                                            <th scope="col" style="text-align: center" >Customer phone number </th>
                                            <th scope="col" style="text-align: center" >price</th>
                                            <th scope="col" style="text-align: center" >status </th>
                                            <th scope="col" style="text-align: center" >Acton</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        for ($cno = 0; $cno < $nofrowso; $cno++) {
                                            $rowo = mysqli_fetch_array($resulto);
                                            $pido = $rowo['p_id'];
                                            
                                           
                                            $querypo = "SELECT * FROM product WHERE p_id = $pido";
                                            $resultpo = mysqli_query($con, $querypo);
                                            $nofrowspo = mysqli_num_rows($resultpo);
                                          
                                            for($o = 0 ; $o < $nofrowspo ; $o++ ){
                                            $rowpo = mysqli_fetch_array($resultpo);
                                             $pico = $rowpo['imagename']; 
                                                  $uo_id = $rowo['u_id'];
                                                $queryoc = "SELECT * FROM `user` WHERE `u_id`= $uo_id ";
                                                         $resultuo = mysqli_query($con, $queryoc);
                                                           $rowuo = mysqli_fetch_array($resultuo);
                                             
                                             ?>
                                
                                        <tr style="align-items: center;border-bottom: 2px solid red;" >
                                                <th scope="row" style="text-align: center;vertical-align: middle"><?= $rowo['o_id'] ?></th>
                                                <td style="width:120px; height:120px;text-align:center; vertical-align:middle">

                                                    <img src="uploads/<?= $pico ?>" class="img-responsive" style="max-height:120px; max-width:120px" />

                                                </td>

                                                <td style="text-align: center;vertical-align: middle"><?= $rowpo['brand'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowo['quan'] ?></td>
                                                 <td style="text-align: center;vertical-align: middle"><?= $rowuo['fname'] ?></td>
                                                    <td style="text-align: center;vertical-align: middle"><?= $rowuo['address'] ?></td>
                                                    <td style="text-align: center;vertical-align: middle"><?= $rowuo['phone'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowo['total_price'] ?>$</td>
                                                <td style="text-align: center;vertical-align: middle"><p><?= $rowo['status'] ?></p></td>


                                                <td style="text-align: center;vertical-align: middle">
                                                     
                                                    <?php if($rowo['status'] == 'ORDER COMFIRMED'){
                                                      ?>
                                                     <a href="Done.php?oid=<?php echo $rowo['o_id']; ?>" class="btn btn-primary bt-sm" id="clear_cart">
                                                                <span class="glyphicon glyphicon-ok " style="font-size:20px;color:blue"></span> Done
                                                            </a>
                                                    <a href="deleteo.php?oid=<?php echo $rowo['o_id'];?>" class="btn btn-danger bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-trash" ></span> Delete Order
                                                    </a><?php
                                                    } else {
                                                        ?>
                                                    
                                                    <a href="confirm.php?oid=<?php echo $rowo['o_id'];?>" class="btn btn-success bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-ok " style="font-size:20px;color:blue"></span> Confirm
                                                    </a>
                                                    <br/>
                                                  
                                                    <a href="deleteo.php?oid=<?php echo $rowo['o_id'];?>" class="btn btn-danger bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-trash" ></span> Delete Order
                                                    </a>
                                                            <?php
                                                    }
?>
                                                
                                                </td>
                                                
                                            </tr>
                                     </form>
                                    <?php
                                        }
                                 }
                        }
         ?>
                                 
                            </tbody>
                            
                        </table>
                 </div>    
                       
                      
            </li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <li class="nav-item"><a class="nav-link glyphicon glyphicon-log-out" href="logout.php"  title="Logout"></a></li>
        </ul>
    </nav>


    <body  style="background-image:url(https://lh3.googleusercontent.com/-IzW_GQEdhP8/VM5hZTGvXII/AAAAAAAABto/3yM6sf7_vhA/s1600/free-download-1600x900-resolution-of-high-quality-background-cool.jpg)" >
        
        <form action="addproduct.php" method="post" enctype="multipart/form-data" class="centered" >   
            <input  type="hidden" name="id" value="<?php echo $_SESSION['s_id']; ?>"/>
            <table  style="border-style: solid">

                <tr ><td>choose your Image</td><td><input type="file" style="color: white" value="UploadImage" id="img"
                                                         name="image" />
                    </td></tr>
               


                <tr><td>choose category</td>
                    <td>  
                        <select name="category" id="categ">
                            <option name="choose"  value="-1" label="choose a category">choose a category's</option>
                            <option name="Offer"  value="offer" label="offer">Offer</option>
                            <option name="console" value="console" label="console">console</option>
                            <option namee="Laptop" value="Laptops" label="Laptop" >Laptop</option>
                            <option name="Gadgets" value="Gadgets" label="Gadgets">Gadgets</option>

                        </select>
                    </td> 
                
                <tr><td>Brand</td><td><input type="text"  id="brand" name="brand"></td></tr>
                <tr><td>Size</td><td><input type="number" min="1" step="1" id="size" name="size"></td></tr>
                <tr><td>Color</td><td><input type="text" id="color" name="color"></td></tr>
                <tr><td>warranty</td><td><input type="number" min="1" step="1" id="warranty" name="warranty"></td></tr>
                
                <tr><td> product description's</td>
                    <td><textarea  id="descrp"
                                   name="descrp" 
                                   placeholder="e.g made in lebanon"
                                   style=" box-sizing: border-box; height: 70px;  direction: ltr;"></textarea></td></tr>
                <tr><td>Quantity</td><td><input type="number" min="1" step="1" id="quan" name="quan"></td></tr>
                
                
                <tr><td>price</td><td><input type="number" min="0.1" step="0.1" id="price" name="price"></td></tr>
                <tr><td></td><td><input type="submit" value="publish it" id="publishpr" name="publishpr"  style="position: relative;right:-125px" ></td>  </tr>
                



            </table>
        </form>
    
<script>
  function check() {
    $(document).ready(fuction(){
    $('#insert').click(function() {
    var image_name = $('#image').val();
            if (image_name == ''){
    alert("please select Image");
            return false;
    }
    else{
    var extension = $('#image').val().split(('.')).pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == - 1)
    {
    alert('Invalid Image File');
            $('#image').val('');
            return false;
    }
    }
    });
    });
    };
</script>

</body>
</html>