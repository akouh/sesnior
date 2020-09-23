<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
// put your code here

require_once 'Connectionfile.php';

if (
        isset($_POST['emailc']) &&
        isset($_POST['passwordc'])
) {
    $emch = $_POST['emailc'];
    $pasch = $_POST['passwordc'];

    $querych = "SELECT * FROM store WHERE  email = '$emch' AND password = '$pasch' ";
    $querychu = "SELECT * FROM user WHERE  email = '$emch' AND password = '$pasch' ";

    $result = mysqli_query($con, $querych);
    $resultu = mysqli_query($con, $querychu);

    if (mysqli_num_rows($result) == 0 && mysqli_num_rows($resultu) == 0) {

        header('location:index.php?message=wronglogin');
    } else {


        $r = mysqli_fetch_assoc($result);
        $a = $r["admin"];
        $u = $r["email"];
        $s_id = $r["s_id"];
        session_start();
        $_SESSION['email'] = $u;
        $_SESSION['ad'] = $a;


        if ($a == 1) {
            $_SESSION['s_id'] = $s_id;
            $_SESSION['Store_name'] = $sname;
            $_SESSION['islogin'] = 1;
            header('location:Adminpage.php');
        } else {
             $r = mysqli_fetch_assoc($resultu);
             $uid = $r['u_id'];
             
            session_start();
           
            $_SESSION['u_id'] = $uid;
            $_SESSION['islogin'] = 1;
            
            header('location:UserInterface.php');
        }
    }
} else {
    echo "something is wrong!";
}
?>
   