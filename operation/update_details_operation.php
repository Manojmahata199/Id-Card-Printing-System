<?php
session_start();
   
include "../config/conn.php";
include "../config/variable.php";



// to update all data of any employee 





if(isset($_POST['update_submit'])){

        
 $id=$_POST['id'];
 $name=$_POST['emp_name'];        
 $mobile=$_POST['emp_mobile'];
 $emargency=$_POST['emp_emargency_mobile'];
 $email=$_POST['emp_email'];
 $address=$_POST['emp_address'];


 $joining_date=$_POST['join_date'];
 //$joining_date = date( 'd-m-y', strtotime( $joining_date_one ) );




  $date_of_birth=$_POST['date_of_birth'];
  //$date_of_birth = date( 'd-m-y', strtotime( $date_of_birth_one ) );


 $blood_group=$_POST['emp_blood_group']; 
 $department=$_POST['emp_department'];
 $designation=$_POST['emp_designation'];


 $date_of_issue=$_POST['date_of_issue'];
  //$date_of_issue = date( 'd-m-y', strtotime( $date_of_issue_one ) );

  $date_of_expiry=$_POST['date_of_expiry'];
 // $date_of_expiry = date( 'd-m-y', strtotime( $date_of_expiry_one ) );

 
 $emp_id=$_POST['emp_id'];
 $is_resign=$_POST['is_resign'];
 $status=$_POST['emp_status'];       
 $emp_type=$_POST['emp_type'];
 $password=$_POST['password'];        
 $card_status=$_POST['card_status'];
 $company_id=$_POST['company_name'];

        
        
        
       

        // if these data is not blank if the admin upadate employee data 


        if($card_status!="" ||  $status!="" || $company_id!="" || $is_resign!="" || $emp_id!="" || $date_of_issue!="" || $date_of_expiry!="" || $joining_date!="" || $department!="" || $designation!=""){
                    if($emp_type!=""){ 

                        $sql="UPDATE `employee_table2` SET `id`='$id',`name`='$name',`mobile`='$mobile',`emargency`='$emargency',`email`='$email',`address`='$address',`date_of_birth`='$date_of_birth',
                         `blood_group`='$blood_group',`joining_date`='$joining_date',`emp_id`='$emp_id',`department`='$department',`designation`='$designation',`date_of_issue`='$date_of_issue',
                         `date_of_expiry`='$date_of_expiry',`is_resign`='$is_resign',`status`='$status',`company_id`='$company_id',`password`='$password',`emp_type`='$emp_type',
                         `card_status`='$card_status'  
                         WHERE  `id`='$id'";


                    }else{
                         $sql="UPDATE `employee_table2` SET `id`='$id',`name`='$name',`mobile`='$mobile',`emargency`='$emargency',`email`='$email',`address`='$address',`date_of_birth`='$date_of_birth',
                         `blood_group`='$blood_group',`joining_date`='$joining_date',`emp_id`='$emp_id',`department`='$department',`designation`='$designation',`date_of_issue`='$date_of_issue',
                         `date_of_expiry`='$date_of_expiry',`is_resign`='$is_resign',`status`='$status',`company_id`='$company_id',`password`='$password',
                         `card_status`='$card_status'  
                         WHERE  `id`='$id'";

                    }


                  $query=mysqli_query($conn,$sql);
                
                
                  $_SESSION['msg']="Data Updated Successfully";
                 
                 
                  header('Location:../all-page/profile_template.php?id='.$id.'');
             }

// this for user employe who can only updata some specific  data 
        else{


            $sql="UPDATE `employee_table2` SET `id`='$id',`name`='$name',`mobile`='$mobile',`emargency`='$emargency',`email`='$email',`address`='$address',`date_of_birth`='$date_of_birth',
                 `blood_group`='$blood_group',`password`='$password'
                   WHERE  `id`='$id'";

             $query=mysqli_query($conn,$sql);


             $_SESSION['msg']="Data Updated Successfully";
             header('Location:../all-page/profile_template.php?id='.$id.'');
         }
        
  }


?>