<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
     session_start();
        if(isset($_SESSION['islogin'])&&
                $_SESSION['islogin'] == 1){
           }
         else{
             $_GET['sid'];
             $_GET['uid'];
               
        }
require_once './Connectionfile.php';
        ?>

<html>

    <head>

        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet"
              type="text/css"
              href="mystyle.css"/>
        <style>
            body {
                display: block;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                color: white;
            }
        </style>
        <style type="text/css">

            h2 {
                color: #000;
                font-size: 26px;

                font-weight: 530;
                margin-left: 60px;
                margin-bottom: -120px;
                margin-top: 50px;
                text-transform: uppercase;
                position: relative;
                display:block;
                border-bottom:2px solid black;
                padding:7px 4px;

            }


            .carousel {
                margin: 50px auto;
                padding: 0 70px;
            }
            .carousel .item {
                min-height: 330px;
                text-align: center;
                overflow: hidden;
            }
            .carousel .item .img-box {
                height: 160px;
                width: 100%;
                position: relative;
            }
            .carousel .item img {	
                max-width: 100%;
                max-height: 100%;
                display: inline-block;
                position: absolute;
                bottom: 0;
                margin: 0 auto;
                left: 0;
                right: 0;
            }
            .carousel .item .h4 {
                font-size: 20px;
                margin: 10px 0;
                font-family: Arial;
                color: #000;

            }

            .carousel .item .btn {
                color: #333;
                border-radius: 0;
                font-size: 11px;
                text-transform: uppercase;
                font-weight: bold;
                background: none;
                border: 1px solid #ccc;
                padding: 5px 10px;
                margin-top: 5px;
                line-height: 16px;
            }
            .carousel .item .btn:hover, .carousel .item .btn:focus {
                color: #fff;
                background: #000;
                border-color: #000;
                box-shadow: none;
            }
            .carousel .item .btn i {
                font-size: 14px;
                font-weight: bold;
                margin-left: 5px;
            }
            .carousel .thumb-wrapper {
                text-align: center;
            }
            .carousel .thumb-content {
                padding: 15px;
            }
            .carousel .carousel-control {
                height: 100px;
                width: 40px;
                background: none;
                margin: auto 0;
                background: rgba(0, 0, 0, 0.2);
            }
            .carousel .carousel-control i {
                font-size: 30px;
                position: absolute;
                top: 50%;
                display: inline-block;
                margin: -16px 0 0 0;
                z-index: 5;
                left: 0;
                right: 0;
                color: rgba(0, 0, 0, 0.8);
                text-shadow: none;
                font-weight: bold;
            }
            .carousel .item-price {
                font-size: 13px;
                padding: 2px 0;
            }
            .carousel .item-price strike {
                color: #999;
                margin-right: 5px;
            }
            .carousel .item-price span {
                color: #86bd57;
                font-size: 110%;
            }
            .carousel .carousel-control.left i {
                margin-left: -3px;
            }
            .carousel .carousel-control.left i {
                margin-right: -3px;
            }
            .carousel .carousel-indicators {
                bottom: -50px;
            }
            .carousel-indicators li, .carousel-indicators li.active {
                width: 10px;
                height: 10px;
                margin: 4px;
                border-radius: 50%;
                border-color: transparent;
            }
            .carousel-indicators li {	
                background: rgba(0, 0, 0, 0.2);
            }
            .carousel-indicators li.active {	
                background: rgba(0, 0, 0 );
            }
            .star-rating li {
                padding: 0;
            }
            .star-rating i {
                font-size: 14px;
                color: yellow;
            }

            .div{
                backface-visibility: hidden;
                border-style: solid;
                color: khaki;
            }

        </style>
    </head>

    <body   style="background-image:url(https://lh3.googleusercontent.com/-IzW_GQEdhP8/VM5hZTGvXII/AAAAAAAABto/3yM6sf7_vhA/s1600/free-download-1600x900-resolution-of-high-quality-background-cool.jpg)">
         <?php
                if($s_id =  $_SESSION['s_id']){
                    
                ?>
        <!-- sTORE -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav" >
            <li class="nav-item"><a class="nav-link" href="Adminpage.php">ADD Product</a></li>
            <li class="nav-item"><a class="nav-link" href="My_Page.php">My Page</a></li>
            <li class="nav-item" ><a class="nav-link" href="UserInterface.php" >UserInterface</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <li class="nav-item" ><a class="nav-link" href="logout.php" >Logout</a></li>
        </ul>
    </nav>
       

                <!-- USER -->
                <?php
                
                    
                } else {
                         $s_id = $_GET['sid'];
                         $uid = $_GET['uid'];
                          
            echo "hello u";
            ?>  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav" >

                    <li class="nav-item" ><a class="nav-link" href="UserInterface.php" >Main</a></li>
                       
                           
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle fas fa fa-shopping-cart" title="My trolley" style="font-size:20px;color:black" href="#" id="navbardrop" data-toggle="dropdown">
                        
                       </a>
                        
                        <?php
                        $querycart = "SELECT * FROM add_to_cart WHERE u_id = $uid";
                        $resultc = mysqli_query($con, $querycart);
                        $nofrowsc = mysqli_num_rows($resultc);
                        
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
                                        for ($cn = 0; $cn < $nofrowsc; $cn++) {
                                            $rowc = mysqli_fetch_array($resultc);
                                            $pidc = $rowc['p_id'];
                                            echo '<form  action="MakeOrder.php" method="GET">';
                                            $queryp = "SELECT * FROM product WHERE p_id = $pidc";
                                            $resultp = mysqli_query($con, $queryp);
                                            $nofrowsp = mysqli_num_rows($resultp);
                                          
                                            for($cp = 0 ; $cp < $nofrowsp ; $cp++ ){
                                            $rowp = mysqli_fetch_array($resultp);
                                             $pic = $rowp['imagename']; ?>
                                
                                        <tr style="align-items: center;border-bottom: 2px solid red;" >
                                                <th scope="row" style="text-align: center;vertical-align: middle"><?= $rowc['cart'] ?></th>
                                                <td style="width:120px; height:120px;text-align:center; vertical-align:middle">

                                                    <img src="uploads/<?= $pic ?>" class="img-responsive" style="max-height:120px; max-width:120px" />

                                                </td>

                                                <td style="text-align: center;vertical-align: middle"><?= $rowp['brand'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['quantity'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['total_price'] ?>$</td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowc['status'] ?></td>


                                                <td style="text-align: center;vertical-align: middle">
                                       
                                                    <input type="hidden" name="idp" id="idpo" value="<?php echo $rowp['p_id']; ?>" />
                                                    <input type="hidden" name="uidc" id="uidp" value="<?php echo $rowc['u_id']; ?>" />
                                                    <input type="hidden" name="sid" id="sid" value="<?php echo $rowc['s_id']; ?>" />
                                                    <input type="hidden" name="cid" id="cid" value="<?php echo $rowc['cart']; ?>" />
                                                    <input type="hidden" name="quantity" id="quantity" value="<?php echo $rowc['quantity']; ?>" />
                                                    <input type="hidden" name="total_price" id="total_price" value="<?php echo $rowc['total_price']; ?>" />
                                                    
                                                    <button type="submit" class="btn btn-primary bt-lg "  > Make As Order</button>
                                                     


                                                    <a href="delete.php?cid=<?php echo $rowc['cart'];?>"  class="btn btn-default bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-trash"></span> Clear
                                                    </a></td>

                                            </tr>
                                   
                                    <?php
                                        }
                                        }
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
                        $queryO = "SELECT * FROM order1 WHERE u_id = $uid";
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
                                            <th scope="col" style="text-align: center" >price</th>
                                             <th scope="col" style="text-align: center" >quantity</th>
                                            
                                            
                                            <th scope="col" style="text-align: center" >status </th>
                                            <th scope="col" style="text-align: center" >Acton</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        for ($cno = 0; $cno < $nofrowso; $cno++) {
                                            $rowo = mysqli_fetch_array($resulto);
                                            $pido = $rowo['p_id'];
                                            echo '<form  action="MakeOrder.php" method="GET">';
                                            $querypo = "SELECT * FROM product WHERE p_id = $pido";
                                            $resultpo = mysqli_query($con, $querypo);
                                            $nofrowspo = mysqli_num_rows($resultpo);
                                          
                                            for($o = 0 ; $o < $nofrowspo ; $o++ ){
                                            $rowpo = mysqli_fetch_array($resultpo);
                                             $pico = $rowpo['imagename']; ?>
                                
                                        <tr style="align-items: center;border-bottom: 2px solid red;" >
                                                <th scope="row" style="text-align: center;vertical-align: middle"><?= $rowo['o_id'] ?></th>
                                                <td style="width:120px; height:120px;text-align:center; vertical-align:middle">

                                                    <img src="uploads/<?= $pico ?>" class="img-responsive" style="max-height:120px; max-width:120px" />

                                                </td>

                                                <td style="text-align: center;vertical-align: middle"><?= $rowpo['brand'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowo['quan'] ?></td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowo['total_price'] ?>$</td>
                                                <td style="text-align: center;vertical-align: middle"><?= $rowo['status'] ?></td>


                                                <td style="text-align: center;vertical-align: middle">
                                       
                                                     
                                                    <?php if($rowo['status'] == 'ORDER COMFIRMED'){
                                                           echo 'Your order on his way to you';
                                                    } else {?>
                                                    
                                                    <a href="deleteo.php?oid=<?php echo $rowo['o_id'];?>" class="btn btn-danger bt-sm" id="clear_cart">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete Order
                                                    </a></td>
                                                    <?php }?>
                                            </tr>
                                    
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
                       <li class="nav-item" ><a class="nav-link glyphicon glyphicon-log-out" href="logout.php" title="Logout" ></a></li>
                   
               
            </ul>
                
        </nav>
                 <?PHP }?>
          <div class="container" style="width: 100%;height: 400px;" >

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <?php
                $queryPROF = "SELECT * FROM product WHERE id_s =  $s_id And category = 'OFFER'" ;
                $resultpr = mysqli_query($con, $queryPROF);
                $nofrowsprof = mysqli_num_rows($resultpr);

                if ($nofrowsprof == 0) {
                    echo "no Store to display yet ";
                } else {
                    ?>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <?php for ($i = 1; $i <= $nofrowsprof; $i++) { ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>


                        <?php }
                        ?> </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >

                        <div class="item active">
                            <img src="image/WhatsApp Image 2017-09-12 at 2.48.57 PM.jpeg" alt="Los Angeles" style="width: 100%;height: 400px;">
                            <div class="carousel-caption">
                                <h3>Welcome</h3>  
                            </div>
                        </div>
                        <?php
                        for ($j = 0; $j < $nofrowsprof; $j++) {
                            $rowprof = mysqli_fetch_assoc($resultpr);
                            $picpr = $rowprof['imagename'];
                            ?>
                            <div class="item">
          <?php echo '<img src="uploads/' . $picpr . '" style="width: 100%;height: 400px;";"/>'; ?>
                                <div class="carousel-caption ">
                                    <h3 ><?php echo $rowprof['brand']; ?></h3>

                                </div>
                            </div>

                        <?php
                        }
                    }
                    ?>
                </div>

                <!-- Left and right controls -->
                <p style="text-align: right;color: red;font-size: 30px; ">Offer's</p>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <br/><br/>   
        <?php
        
        $queryPrdv = "SELECT DISTINCT category FROM product WHERE id_s = $s_id ";
        $resultprdv = mysqli_query($con, $queryPrdv);
        $nofrowsprdv = mysqli_num_rows($resultprdv);

        if ($nofrowsprdv == 0) {
            echo "no Product  to display yet ";
        } else {
            ?>

            <?php
            for ($j = 0; $j < $nofrowsprdv; $j++) {

                $rowprdv = mysqli_fetch_assoc($resultprdv);
                $catbrow = $rowprdv['category'];
                ?>



                <div class="container" style="width: 100%"  >
                    <div class="row">
                        <div class="col-md-12">
 <br><br> <br><br>

                            <h2><?php echo $catbrow; ?></h2>

                            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">    

                                <br><br><br/><br/>

                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner" >
                                    <div class="item carousel-item active">
                                        

                                        <div class="row" style="border: #333 5px">
                                            
                                            <?php
                                            $queryPrnca = "SELECT * FROM product WHERE id_s =  $s_id And category = '$catbrow' ";
                                            $resultprnca = mysqli_query($con, $queryPrnca);
                                            $nofrowsprnca = mysqli_num_rows($resultprnca);

                                            for ($nca = 0; $nca < $nofrowsprnca; $nca++) {

                                                $rownca = mysqli_fetch_assoc($resultprnca);
                                                $picnca = $rownca['imagename'];
                                                $price = $rownca['price'];
                                                $id = $rownca['p_id'];
                                                   ?>
                                            
                                                <div class="col-sm-3">
                                                    <?php if($u_id =  $_SESSION['s_id']){?>
                                                      <form  style="width: 220px; border-color: #ffff;" action="delItem.php" method="GET" >
                                                          <div class="col-sm div">
                                                          <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <?php echo '<img src="uploads/' . $picnca . '" class="img-responsive img-fluid" style="width: 250px ; height:200px" alt="">';
                                                     ?></div>
                                                                                                 <div class="thumb-content">
                                                         <h4 style="color: #333"><?php echo $rownca['brand']; ?></h4>
                                                       
                                                         <p class="item-price"><span><?php echo $price ?>.00</span></p>
                                                            <input type="hidden" name="id" id="<?php echo $rownca['p_id']; ?>" value="<?php echo $rownca['p_id']; ?>" />
                                                         
                                                            <input type="submit" class="btn-danger btn-lg"   id="id1" value="Delete">
                                                        </div>
                                                        
                                                    </div>
                                                          </div>
                                                      </form>
                                                    <?php
                                                    }
                                                    else{
                                                        ?>
                                                          <form  style="width: 220px; border-color: #ffff;" action="add_to_cart.php" method="GET" >
                                                          <div class="col-sm div">
                                                          <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <?php echo '<img src="uploads/' . $picnca . '" class="img-responsive img-fluid" style="width: 250px ; height:200px" alt="">';
                                                     ?></div>
                                                                                                 <div class="thumb-content">
                                                         <h4 style="color: #333"><?php echo $rownca['brand']; ?></h4>
                                                       <input type="text" name="quantity" id="quantity" class="form-control" value="1" /> 
                                                         <p class="item-price"><span><?php echo $price ?>.00</span></p>
                                                            <input type="hidden" name="id" id="<?php echo $rownca['p_id']; ?>" value="<?php echo $rownca['p_id']; ?>" />
                                                            <input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>" />
                                                            <input type="submit" class="btn-success btn-lg"   id="id1" value="add to card">
                                                        </div>
                                                        
                                                    </div>
                                                          </div>
                                                      </form>
                                                 <?php   }
                                                    
                                                    ?>
                                                </div>

        <?php } ?>  
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control left carousel-control-prev" href="#myCarousel2" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>


                    </div>
        <?php
            }
            }?>
    
                </div>
           
    </body>

</html>