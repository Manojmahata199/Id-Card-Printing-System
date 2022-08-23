<?php
session_start();
include "../config/conn.php";
include "../config/variable.php";

 // to delete any application from database 
 if(isset($_GET['id'])){

      $leave_id=$_GET['id'];
      $sql="DELETE FROM `leave_application` WHERE `leave_id`='$leave_id'";

      $query=mysqli_query($conn,$sql);
       $_SESSION['msg2']="Application Deleted Successfully";
      header('Location:../all-page/leave_application_list.php');


}

?>