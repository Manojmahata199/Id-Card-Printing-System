<?php
session_start();



    include "../config/conn.php";
    include "../config/variable.php";
    include "../library_function/functions.php";

// to submit any leave application in database 
    

if(isset($_POST['submit'])){






  $emp_name=$_POST['emp_name'];
  $emp_id=$_POST['emp_id'];
  $emp_mobile=$_POST['emp_mobile'];
  $leave_date=$_POST['leave_date'];
  $reason=$_POST['reason'];

  

  $sql="INSERT INTO `leave_application`(`emp_name`, `emp_mobile`, `date`, `reason`, `emp_id`) 
  VALUES ('$emp_name','$emp_mobile','$leave_date','$reason','$emp_id')";


  
  





  $query=mysqli_query($conn,$sql);
  $_SESSION['msg']="Application Submitted";



  header('Location:../all-page/leave_application_list.php');
  


  










}




?>
