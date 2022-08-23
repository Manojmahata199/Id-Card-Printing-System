<?php


include "../config/conn.php";
include "../config/variable.php";


 if(isset($_POST['change_emp_type_submit'])){

      $emp_id=$_POST['emp_id'];
       $sql="UPDATE `employee_table` 
            SET `emp_type`='admin'
             WHERE `emp_id`='$emp_id'";

      $query=mysqli_query($conn,$sql);
   
      header('Location:../all-page/main.php');


}
if(isset($_POST['change_emp_status_submit'])){

      $emp_id=$_POST['emp_id'];
       $sql="UPDATE `employee_table` 
            SET `status`='resigned'
             WHERE `emp_id`='$emp_id'";

      $query=mysqli_query($conn,$sql);
      header('Location:../all-page/main.php');


}

?>