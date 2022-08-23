<?php
session_start();

  include "../config/variable.php";
   include "../config/conn.php";




   if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $date=$_POST['date'];
    $reason=$_POST['reason'];
    $massage=$_POST['massage'];
    $sql2="UPDATE `holiday_list` SET `id`='$id',`date`='$date',`reason`='$reason',`massage`='$massage' WHERE `id`='$id'";
    $query2=mysqli_query($conn,$sql2);
    if($query2){
   
        $_SESSION['msg']="Holiday Updated Successfully";       

       header('Location:'.base_link.'all-page/holiday_list.php');
     }else{

         $_SESSION['msg2']="Holiday Not Updated";       

       header('Location:'.base_link.'all-page/holiday_list.php');

     }
    

   


  }
  ?>
