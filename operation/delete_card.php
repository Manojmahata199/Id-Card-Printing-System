<?php
session_start();
include "../config/conn.php";
include "../config/variable.php";

// to delete any company from company  databse 
 if(isset($_GET['id'])){

 $id=$_GET['id'];
 

      $sql="DELETE FROM `card_design` WHERE `card_id`='$id'";

      $query=mysqli_query($conn,$sql);
       $_SESSION['msg2']="Card Deleted Successfully";
      header('Location:../all-page/manage_card.php');


}

?>