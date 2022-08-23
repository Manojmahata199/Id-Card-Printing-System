<?php
session_start();
      include "../config/variable.php";

      include "../config/conn.php";

        



      if(isset($_POST['card_select'])){

         $id=$_POST['id'];


         $update_by_name=$_POST['update_by_name'];
         $update_reason=$_POST['update_reason'];
         $update_by_type=$_POST['update_by_type'];
         $update_by_person_emp_id=$_POST['update_by_person_emp_id'];
         $timezone=date_default_timezone_set("Asia/Calcutta");
         $update_date = date('Y-m-d H:i:s');
         
         $update_day = date('l');
         $img= $_POST['input_image'];

               
                    if($update_reason!=""){



                  


                                   $sql="UPDATE `employee_table2` SET `update_by_name`='$update_by_name',`update_reason`='$update_reason',`update_by_type`='$update_by_type',
                                   `update_date`='$update_date',`update_day`='$update_day',`update_by_person_emp_id`='$update_by_person_emp_id'

                                    WHERE `id`='$id'";
                                   $result=mysqli_query($conn,$sql);


                                   header('Location:../all-page/update_details.php?id='.$id.'');
                               
                              

                    }else{

                         $_SESSION['msg2']="!Please Fill all Data";

                         header('Location:../all-page/update_report.php?id='.$id.'');  
                    }

}