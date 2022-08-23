<?php

session_start();



    include "../config/conn.php";
    include "../config/variable.php";
    include "../library_function/functions.php";



if(isset($_POST['submit'])){


	$emp_name=$_POST['emp_name'];
	$emp_email=$_POST['emp_email'];
	$emp_mobile=$_POST['emp_mobile'];
	$emp_image=$_FILES['emp_image'];
	$emp_address=$_POST['emp_address'];
	$date_of_birth=$_POST['date_of_birth'];
	$emp_emargency_mobile=$_POST['emp_emargency_mobile'];
	$emp_blood_group=$_POST['emp_blood_group'];
	$image_name=$emp_image['name'];
	$image_path=$emp_image['tmp_name'];
    $emp_password=$_POST['emp_password'];

	  $new_path='image/img/'.$image_name.'';



     $result=move_uploaded_file($image_path,$new_path);


	$sql="INSERT INTO `employee_table2`(`name`, `mobile`, `emargency`, `email`, `address`, `image`, `date_of_birth`, `blood_group`,`password`) 

	 VALUES ('$emp_name','$emp_mobile','$emp_emargency_mobile','$emp_email','$emp_address','$image_name','$date_of_birth','$emp_blood_group','$emp_password')";


	 

	 $query=mysqli_query($conn,$sql);
	 
	 if($query){


	 	$_SESSION['msg3']="Registration Succesfully";
        header('Location:../registration.php');

	 }else{

	 	$_SESSION['msg4']="Registration Unsuccesfully";
        header('Location:.../registration.php');

	 }

	  
	  

  }


 ?>
















