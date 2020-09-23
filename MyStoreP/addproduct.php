<?php
        // put your code here

        require_once 'Connectionfile.php';
           if( isset($_POST['id'])&&
           isset($_POST['quan'])&&
                isset($_POST['descrp'])&&
                isset($_POST['category'])&&
                isset($_POST['price'])
                    ){
                 if(!empty($_FILES['image']['name'])){
                          
                         
                        
            move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$_FILES['image']['name']);
                        
                        } 
               // $u= addslashes(file_get_contents($_FILES['image']["uploads"]));
                $idpr=$_POST['id'];
                $quan = $_POST['quan'];
                $des= $_POST['descrp'];
                $cat= $_POST['category'];
                $pr= $_POST['price'];
                $brand=$_POST['brand'];
                $size= $_POST['size'];
                $color= $_POST['color'];
                $warr= $_POST['warranty'];
                $in =$_FILES['image']['name'];
        
                $queryPr = "INSERT INTO product(`p_id`, `id_s`, `imagename`, `quantity`, `price`, `description`, `category`, `brand`, `size`, `color`, `warranty`) "
                        . "VALUES(NULL,'$idpr','$in','$quan','$pr','$des','$cat','$brand','$size','$color','$warr')";
                if(mysqli_query($con, $queryPr)) {
                    //echo '<script>alert(Image Insertd into Database)</script>';
                    //$newid = mysqli_insert_id($con);
                    // success
                    echo "success";
                    header('location:adminpage.php');
                    
                  
                }else{
                    echo "somthing is wrong". mysqli_error($con);
                    
                }} else {
            echo "something is wrongGGG!";
        }
        ?>
    
