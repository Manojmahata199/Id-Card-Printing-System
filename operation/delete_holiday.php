<?php
session_start();

include "../config/conn.php";
include "../config/variable.php";

 // to delete any department from department tsble in database 

 if(isset($_GET['id'])){

      $id=$_GET['id'];
      $sql="DELETE FROM `holiday_list` WHERE `id`='$id'";

      $query=mysqli_query($conn,$sql);
      $_SESSION['msg2']="Holiday Deleted successfully";
      header('Location:../all-page/holiday_list.php');


}

?>