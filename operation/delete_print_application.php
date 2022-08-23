<?php
session_start();
include "../config/conn.php";
include "../config/variable.php";

 // to delete any application from database 
 if(isset($_GET['id'])){

      $id=$_GET['id'];
      $sql="DELETE FROM  `print_application` WHERE `id`='$id'";

      $query=mysqli_query($conn,$sql);
       $_SESSION['msg2']="Application Deleted Successfully";
      header('Location:../all-page/print_application_list.php');


}

?>