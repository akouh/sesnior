<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_hostname = 'localhost';
$db_database = 'justorder';
$db_username = 'root';
$db_password = '';

$con = 
 mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//check connection
if(mysqli_connect_error()){
    echo "failed to connect : .mysqli_connect_error()";
}
?>