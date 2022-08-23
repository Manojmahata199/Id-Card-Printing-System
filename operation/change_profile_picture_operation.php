<?php
session_start();
include "../config/variable.php";


include "../config/conn.php";

// to change profile picture 

if(isset($_POST['profile_submit'])){


	$id=$_POST['id'];
	$image=$_FILES['profile_img'];


	$image_name=$image['name'];
        $image_path=$image['tmp_name'];

        $d= $d=dirname(__FILE__)."/image/img/";        

        $new_path=$d.$image_name.'';
             
       


	move_uploaded_file($image_path,$new_path);
        
       
    
	

    $sql="UPDATE `employee_table2` SET `image`='$image_name' WHERE `id`='$id'";
    $query=mysqli_query($conn,$sql);
    
   

    $_SESSION['msg']="Profile Picture Updated  Successfully";

    header('Location:../all-page/profile_template.php?id='.$id.'');


}


?>