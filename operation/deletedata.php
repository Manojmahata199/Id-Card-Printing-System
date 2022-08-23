<?php


include "../config/conn.php";
include "../config/variable.php";


 if(isset($_GET['id'])){

      $id=$_GET['id'];
      $sql="DELETE FROM `employee_table2` WHERE `id`='$id'";

      $query=mysqli_query($conn,$sql);

      $_SESSION['msg2']="Data Deleted Successfully";
      header('Location:../all-page/main.php');


}

?>