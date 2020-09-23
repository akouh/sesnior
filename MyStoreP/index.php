<?php
require_once './Connectionfile.php';
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
            label{
                color: #333;
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >

            <!-- Brand -->
            <a class="navbar-brand" href="#">www.store.com</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">



                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                            Main
                        </a>

                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Categories
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="#">Technology</a>
                        </div>
                    </li>

                   
                    <!-- Links -->
                    

                    <li class="nav-item" >
                        <a class="nav-link" href="about.php" >About</a>
                    </li>

                    <li  class="nav-item nav-right " data-toggle="modal" data-target="#myModal">
                        <a class="nav-link btn-outline-secondary my-2 my-sm-0" href="#" >Login</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-2" action="Search.php" method="Get">
                    <input class="form-control mr-sm-2" id="search" name="Search" placeholder="Search" aria-label="Search">
                    
                    <button type="submit" class=" btn-outline-success my-2 my-sm-0"  > Search </button>
                </form>
            </div>

        </nav>
        <div class="container" style="width: 100%;height: 400px;" >

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                <!-- Indicators -->
                <?php
                $queryPROF = "SELECT * FROM product WHERE category = 'OFFER'";
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
                            <img src="image/WhatsApp Image 2017-09-12 at 2.48.57 PM.jpeg" alt="Los Angeles" style="width: 100%;">
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
                                <?php echo '<img src="uploads/' . $picpr . '" style="width:100%;"/>'; ?>
                                <div class="carousel-caption">
                                    <h3><?php echo $rowprof['brand']; ?></h3>

                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>

                <!-- Left and right controls -->
                <p style="text-align: right;color: red;font-size: 30px; ">Offers</p>
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
        $queryPrdv = "SELECT DISTINCT category FROM product";
        $resultprdv = mysqli_query($con, $queryPrdv);
        $nofrowsprdv = mysqli_num_rows($resultprdv);

        if ($nofrowsprdv == 0) {
            echo "no Product to display yet ";
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


                            <h2 style="font-weight: bold; color: khaki"><?php echo $catbrow; ?></h2>

                            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">    

                                <br/><br/><br/><br/>

                                <!-- Wrapper for carousel items -->

                                <div class="carousel-inner " >
                                    <div class="item carousel-item active">

                                        <div class="row" style="border: #333 5px">

                                            <?php
                                            $queryPrnca = "SELECT * FROM product WHERE category = '$catbrow' ";
                                            $resultprnca = mysqli_query($con, $queryPrnca);
                                            $nofrowsprnca = mysqli_num_rows($resultprnca);

                                            for ($nca = 0; $nca < $nofrowsprnca; $nca++) {

                                                $rownca = mysqli_fetch_assoc($resultprnca);
                                                $picnca = $rownca['imagename'];
                                                $price = $rownca['price'];
                                                $idp = $rownca['p_id'];
                                                ?>
                                                <form  style="width: 250px; border-color: #ffffff;"  >
                                                    <div class="col-sm div">

                                                        <div class="thumb-wrapper">
                                                            <div class="img-box">
                                                                <?php echo '<img src="uploads/' . $picnca . '" class="img-responsive img-fluid" style="width: 250px ; height:200px" alt="">';
                                                                ?></div>
                                                            <div class="thumb-content">
                                                                <h4 style="color: khaki; font-weight: bold"><?php echo $rownca['brand']; ?></h4>
                                                                <p class="item-price" ><span style="color: #fff"><?php echo $price ?>.00$</span></p>
                                                                <button type="button" class="btn-success btn-lg" data-toggle="modal" data-target="#log" data-whatever="<?php echo $rownca['p_id']; ?>" id="<?php echo $rownca['p_id']; ?>" value="<?php echo $rownca['p_id']; ?>">Add to cart</button>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </form> 
                                            <?php } ?>  
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control left carousel-control-prev"  href="#myCarousel2" data-slide="prev">
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                    <i style="color: #fff" class="fa fa-angle-left"></i>
                                </a>
                            
                                <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                   
                    <?php
                }
            }
            ?>



        </div>
       
        <div class="modal fade" id="myModal" >
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->

                <form action="Check.php" method="POST">
                    <dix    v class="modal-content ">

                        <div class="modal-content">
                            <img src="https://i.pinimg.com/originals/96/2f/f6/962ff6c2e535eebc9d762cf420b631c8.gif" height="130">
                        </div>
                        <div style="position: relative;right:-80px">
                            <font face="ariate" size="4" >E-Mail</font>
                        </div>
                        <div style="position: relative;right:-80px ">
                            <input style="color: black" type="email" id="email" name="emailc" size="20"  class="box" placeholder="@" >
                        </div> 
                        <div style="position: relative;right:-80px">  
                            <font  face="ariate" size="4" class="box">Password</font>
                        </div>
                        <div style="position: relative;right:-80px">
                            <input  type="password" id="password" name="passwordc" size="20" maxlength="30" class="box" style="color: black">
                        </div>
                        <div style="position: relative;right:-125px">

                            <input type="submit"  value="Log in" class="btn btn-success btn-lg btn-radius" >

                            <a href="Choose-signup.php"><h4> &#8594 sign up </h4></a>

                        </div>
                    </div>

            
                </form>

            </div>

        </div>


        <div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-sm">


                <form action="Check.php" method="POST" >

                    <div class="modal-content">



                        <div class="modal-content">

                            <div class="modal-content">
                                <img src="https://i.pinimg.com/originals/96/2f/f6/962ff6c2e535eebc9d762cf420b631c8.gif" height="130">
                            </div>
                            <div style="position: relative;right:-80px">
                                <font  face="ariate" size="4" >E-Mail</font>
                            </div>
                            <div style="position: relative;right:-80px">
                                <input style="color: black" type="email" id="email" name="emailc" size="20"  class="box" placeholder="@" >
                            </div> 
                            <div style="position: relative;right:-80px">  
                                <font  face="ariate" size="4" class="box">Password</font>
                            </div>
                            <div style="position: relative;right:-80px">
                                <input type="password" id="password" name="passwordc" size="20" maxlength="30" class="box" style="color: black">
                            </div>
                            <div style="position: relative;right:-125px">

                                <input type="submit"  value="Log in" class="btn btn-success btn-lg btn-radius" >

                                <a href="Choose-signup.php"><h4> &#8594 sign up </h4></a>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        
        <script>
            $('#log').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                var my_id = recipient.valueOf('id');

                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.


            })
        </script>
        <script>
            $(document).ready(function () {

                var quantitiy = 0;
                $('.quantity-right-plus').click(function (e) {

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());
                    // If is not undefined

                    $('#quantity').val(quantity + 1);
                    // Increment

                });
                $('.quantity-left-minus').click(function (e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());
                    // If is not undefined

                    // Increment
                    if (quantity > 0) {
                        $('#quantity').val(quantity - 1);
                    }
                });
            });
        </script>

    </body>

</html>
