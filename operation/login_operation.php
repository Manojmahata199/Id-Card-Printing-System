<?php
session_start();


    include "../config/conn.php";
    include "../config/variable.php";
    include "../library_function/functions.php";

// to get email and pasword from login form 

if(isset($_POST['submit'])){


     $email=$_POST['email'];  
     $password=$_POST['password'];
     $emp_type=$_POST['emp_type'];
    



      if($_POST['email']!=""  and $_POST['password']!=""  and  $_POST['emp_type']!=""){
      
            $sql="SELECT * FROM `employee_table2` WHERE `email`='$email' and `password`='$password' and `emp_type`='$emp_type'";
      }
      
      else{
         $_SESSION['msg']="Logged in Faild!Select right One";
           header('Location:../index.php');
      }


    $query=mysqli_query($conn,$sql);

    $numres=mysqli_num_rows($query);

    $result=mysqli_fetch_array($query);


    // after getting login information of the user set all dat in session 
    $_SESSION['name']=$result['name'];
    $_SESSION['email']=$result['email'];
    $_SESSION['mobile']=$result['mobile'];
    $_SESSION['address']=$result['address'];
    $_SESSION['department']=$result['department'];
    $_SESSION['designation']=$result['designation'];
    $_SESSION['emp_type']=$result['emp_type'];
    $_SESSION['joining_date']=$result['joining_date'];
    $_SESSION['password']=$result['password'];
    $_SESSION['image']=$result['image'];
    $_SESSION['id']=$result['id'];
    $_SESSION['card_status']=$result['card_status'];
    $_SESSION['emp_id']=$result['emp_id'];
    $_SESSION['company_id']=$result['company_id'];


   
 



    if($numres>0){
       
         $_SESSION['msg']="Successfully Logged in";
          header('Location:../all-page/dashboard.php');

       
    }
    else{ 

       $_SESSION['msg']="Logged in Faild";
       header('Location:../index.php');

    }


}

?>


 
  