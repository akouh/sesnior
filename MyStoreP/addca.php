<?php
        require_once 'Connectionfile.php';
          
           if(  isset($_GET['fname'])&&
                isset($_GET['lname'])&&
                isset($_GET['birthday'])&&
                isset($_GET['gender'])&&
                isset($_GET['country'])&&
                isset($_GET['Pnumber'])&&
                isset($_GET['address'])&&
                isset($_GET['email'])&&
                isset($_GET['password'])
                    ){
                $n= $_GET['fname'];
                $ln= $_GET['lname'];
                $br= $_GET['birthday'];
                $ge= $_GET['gender'];
                $co= $_GET['country'];
                $pn= $_GET['Pnumber'];
                $ad= $_GET['address'];
                $ema= $_GET['email'];
                $pas= $_GET['password'];
            
                $query = "INSERT INTO user VALUES(null,'$n','$ln','$br','$ge','$co','$pn','$ad','$ema','$pas')";

            if (mysqli_query($con, $query)) {
               echo"success";
            } else {
                echo "failure".mysqli_error($con);
            }
        } else {
            echo "something is wrong!";
        }
        ?>
