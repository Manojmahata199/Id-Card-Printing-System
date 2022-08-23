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
  $emp_department=$_POST['emp_department'];
  $emp_designation=$_POST['emp_designation'];
 
  $emp_address=$_POST['emp_address'];

  
  $joining_date=$_POST['join_date'];
  //$joining_date = date( 'd-m-y', strtotime( $joining_date_one ) );
  


  $emp_id=$_POST['emp_id'];
  
  $date_of_birth=$_POST['date_of_birth'];
  //$date_of_birth = date( 'd-m-y', strtotime( $date_of_birth_one ) );


  $emp_emargency_mobile=$_POST['emp_emargency_mobile'];
  $emp_blood_group=$_POST['emp_blood_group'];


  $date_of_issue=$_POST['date_of_issue'];
  //$date_of_issue = date( 'd-m-y', strtotime( $date_of_issue_one ) );

  $date_of_expiry=$_POST['date_of_expiry'];
  //$date_of_expiry = date( 'd-m-y', strtotime( $date_of_expiry_one ) );



  $add_by=$_POST['add_by'];
  $company_name_id=$_POST['company_name'];
  



  // var_dump($emp_qr);
  // var_dump($emp_image);
  // 


  $image_name=$emp_image['name'];
  $image_path=$emp_image['tmp_name'];

  $d= $d=dirname(__FILE__)."/image/img/";        

  $new_path=$d.$image_name.'';
  //$new_path='image/img/'.$image_name.'';



  $result=move_uploaded_file($image_path,$new_path);


  
 $sql="INSERT INTO `employee_table2`(`name`, `mobile`, `emargency`, `email`, `address`, `image`, `date_of_birth`, `blood_group`,`joining_date`, `emp_id`, `department`, `designation`, `date_of_issue`, `date_of_expiry`,`add_by`,`company_id`) 

 VALUES ('$emp_name','$emp_mobile','$emp_emargency_mobile','$emp_email','$emp_address','$image_name','$date_of_birth','$emp_blood_group','$joining_date','$emp_id','$emp_department','$emp_designation','$date_of_issue',
  '$date_of_expiry','$add_by','$company_name_id')";


 // $sql="INSERT INTO `employee_table`( `emp_name`, `emp_email`, `emp_mobile`, `emp_department`, `emp_designation`, `emp_address`, `emp_img`, `joining_date`) 
 //                         VALUES ('$emp_name','$emp_email','$emp_mobile','$emp_department','$emp_designation','$emp_address','$image_name','$join_date')";


  $query=mysqli_query($conn,$sql);

  $_SESSION['msg']="Employee added Succesfully";

  header('Location:../all-page/main.php');
  


}




?>
