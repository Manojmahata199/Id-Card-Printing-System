<?php
session_start();

include "../config/conn.php";
include "../config/variable.php";

 // to delete any designation from designation table in database 

 if(isset($_GET['id'])){

      $id=$_GET['id'];
      $sql="DELETE FROM `designation_table` WHERE `designation_id`='$id'";

      $query=mysqli_query($conn,$sql);
      $_SESSION['msg2']="Designation Deleted successfully";
      header('Location:../all-page/manage_designation.php');


}

?>