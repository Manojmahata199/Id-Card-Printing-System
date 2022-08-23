<?php
ob_start();
session_start();

include "../config/variable.php";
include "../config/conn.php";

require('../library_php_excel/Classes/PHPExcel.php');
require('../library_php_excel/Classes/PHPExcel/IOFactory.php');









if(isset($_POST['excel_submit'])) {


    if(isset($_FILES['excel_file']['name']) && $_FILES['excel_file']['name'] != "") {
        $allowedExtensions = array("xls","xlsx");
        $ext = pathinfo($_FILES['excel_file']['name'], PATHINFO_EXTENSION);



        
    
        if(in_array($ext, $allowedExtensions)) {
        
           $d=dirname(__FILE__)."/upload/file/";

           $file = $d.$_FILES['excel_file']['name'];
           $isUploaded = copy($_FILES['excel_file']['tmp_name'], $file);

         

            if($isUploaded) {
          
                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                    
                    $sheet = $objPHPExcel->getSheet(0);
                    $total_rows = $sheet->getHighestRow();
                    $highestColumn      = $sheet->getHighestColumn(); 
                    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 




                          //    loop over the rows
                    for ($row = 1; $row <= $total_rows; ++ $row) {
                        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                            $cell = $sheet->getCellByColumnAndRow($col, $row);
                            $val = $cell->getValue();
                            $records[$row][$col] = $val;
                        }
                    }

                    // to store records in a array for each record 

                    foreach($records as $row){

                        // print_r($row);



                    $emp_name=$row[0];
                    $emp_mobile=$row[1];
                    $emp_emargency_mobile=$row[2];
                    $emp_email=$row[3];
                    $emp_address=$row[4];
                    $emp_img=$row[5];
                    $date_of_birth=$row[6];
                    $blood_group=$row[7];
                    $joining_date=$row[8];
                    $emp_id=$row[9];
                    $department=$row[10];
                    $designation=$row[11];
                    $date_of_issue=$row[12];
                    $date_of_expiry=$row[13];
                    $qr=$row[14];
                    $is_resign=$row[15];
                    $status=$row[16];
                    $add_by=$row[17];
                    $status_id=$row[18];
                    $printed=$row[19];
                    $print_no=$row[20];
                    $emp_data_id=$row[21];
                    $company_id=$row[22];
                    $qr_generated=$row[23];
                    $approved=$row[24];
                   $printed_date=$row[25];
                   $reason_for_duplicate=$row[26];
                   $duplicate_by_snapshot=$row[27];
                   $card_status=$row[28];
                   $card_status_position_datetime=$row[29];
                   $card_status_position_chang_by=$row[30];
                   $password=$row[31];
                   $emp_type=$row[32];
                   $update_by_name=$row[33];
                   $update_reason=$row[34];
                   $update_by_type=$row[35];
                   $update_date=$row[36];
                   $update_day=$row[37];
                   $img_Update_by=$row[38];
                   $card_status_position_change_by_name=$row[39];
                  $card_status_position_change_by_emp_id=$row[40];
                  $update_by_person_emp_id=$row[41];
                     // $card_status=$row[30];
                       
                        
                        // // Insert into database
                        $sql=" 
                         INSERT INTO `employee_table2`(`name`, `mobile`, `emargency`, `email`, `address`, `image`, `date_of_birth`,`blood_group`,`joining_date`,`emp_id`, `department`, `designation`, 
                            `date_of_issue`, `date_of_expiry`,`qr`, `is_resign`, `status`, `add_by`, `status_id`, `printed`, `print_no`, `emp_data_id`, `company_id`, `qr_generated`, `approved`, 
                            `printed_date`,    `reason_for_duplicate`,`duplicate_by_snapshot`, `card_status`, `card_status_position_date_time`,`card_status_position_chang_by`,`password`, `emp_type`,
                             `update_by_name`, `update_reason`, `update_by_type`, `update_date`, `update_day`, `img_Update_by`, `card_status_position_change_by_name`,`card_status_position_change_by_emp_id`,`update_by_person_emp_id`) 

                         VALUES ('$emp_name','$emp_mobile','$emp_emargency_mobile','$emp_email','$emp_address','$emp_img','$date_of_birth','$blood_group','$joining_date','$emp_id','$department','$designation',  '$date_of_issue','$date_of_expiry','$qr','$is_resign','$status','$add_by','$status_id','$printed','$print_no','$emp_data_id','$company_id','$qr_generated','$approved',
                               '$printed_date','$reason_for_duplicate','$duplicate_by_snapshot','$card_status',' $card_status_position_datetime','$card_status_position_chang_by','$password','$emp_type',
                               '$update_by_name','$update_reason','$update_by_type','$update_date','$update_day','$img_Update_by','$card_status_position_change_by_name','$card_status_position_change_by_emp_id','$update_by_person_emp_id')";


                        $query=mysqli_query($conn,$sql);
                        $_SESSION['msg']="Data Imported Successfully";  
                       
                         
    
                    }
                    header('Location:../all-page/file_import.php');
          
            } else {
                echo '<span class="msg">File not uploaded!</span>';
                $_SESSION['msg2']="Data Import Unsuccessfull1";
                 header('Location:../all-page/file_import.php');
  
                }

        } else {
            echo '<span class="msg">Please upload excel sheet.</span>';
            $_SESSION['msg2']="Data Import Unsuccessfull2";
             header('Location:../all-page/file_import.php');
  
        }
    } else {
        echo '<span class="msg">Please upload excel file.</span>';
        $_SESSION['msg2']="Data Import Unsuccessfull3";
         header('Location:../all-page/file_import.php');
  
    }
}
ob_end_flush();
?>