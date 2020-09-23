<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Connectionfile.php';
          
           if(  isset($_POST['fname'])&&
                isset($_POST['lname'])&&
                isset($_POST['birthday'])&&
                isset($_POST['gender'])&&
                isset($_POST['country'])&&
                isset($_POST['Pnumber'])&&
                isset($_POST['address'])&&
                isset($_POST['email'])&&
                isset($_POST['password'])
                    ){
                $n= $_POST['fname'];
                $ln= $_POST['lname'];
                $br= $_POST['birthday'];
                $ge= $_POST['gender'];
                $co= $_POST['country'];
                $pn= $_POST['Pnumber'];
                $ad= $_POST['address'];
                $ema= $_POST['email'];
                $pas= $_POST['password'];
            
                $query = "INSERT INTO user VALUES(null,'$n','$ln','$br','$ge','$co','$pn','$ad','$ema','$pas')";

            if (mysqli_query($con, $query)) {
                header('location:index.php');
            } else {
                echo "failure".mysqli_error($con);
            }
        } else {
            echo "something is wrong!";
        }
        ?>

    </body>
</html>
