<?php
session_start();
      include "../config/variable.php";

	  include "../config/conn.php";





	  $sql="SELECT * FROM `employee_table2`";
	  $query=mysqli_query($conn,$sql);
	  $res=array();
	  while($resultarray=mysqli_fetch_array($query)){
              $res[]=$resultarray;
	  }


       
 

       // This is for get all result in table field for export
      
	   $html='<table style="text-align:center;">
	   <tr>
	            <td>name</td>
	            <td>Mobile</td>
	            <td>Emargency No</td>
	            <td>Email</td>
	            <td>address</td>
	            <td>image</td>
	            <td>Date Of Birth</td>
	            <td>Blood Group</td>
	            <td>Joining Date</td>
	            <td>Employee Id</td>
	            <td>Department</td>
	            <td>Designation</td>	            
	            <td>Date Of Issue </td>
	            <td>Date of Expiry</td>
	            <td>Qr Image</td>
	            <td>Is Resign</td>
	            <td>Status</td>
	            <td>Add By</td>
	            <td>Status Id</td>
	            <td>Printed</td>
	            <td>Print No</td>
	            <td>Employee data Id</td>
	            <td>Company Id</td>
	            <td>Qr Generated</td>
	            <td>approved</td>
	            <td>Printed Date</td>
	            <td>Reason for Duplicate</td>
	            <td>duplicate_by_snapshot</td>
	            <td>Card status</td>
	            <td>card status position date time</td>
	            <td>card status position chang by</td>
	            <td>password</td>
	            <td>emp_type</td>
	            <td>update_by_name</td>
	            <td>update_reason</td>
	            <td>update_by_type</td>
	            <td>update_date</td>
	            <td>update_day</td>
	            <td>img_Update_by</td>
	            <td>card_status_position_change_by_name</td>
                   <td>card_status_position_change_by_id</td>
                   <td>update_by_person_emp_id</td>









	   </tr>';
	           



	            foreach($res as $result) {
	            	$html.='<tr>
	            	            
	            	            <td>'.$result['name'].'</td>
	            	            <td>'.$result['mobile'].'</td>
	            	            <td>'.$result['emargency'].'</td>
	            	            <td>'.$result['email'].'</td>
	            	            <td>'.$result['address'].'</td>
	            	            <td>'.$result['image'].'</td>
	            	            <td>'.$result['date_of_birth'].'</td>
	            	            <td>'.$result['blood_group'].'</td>
	            	            <td>'.$result['joining_date'].'</td>
	            	            <td>'.$result['emp_id'].'</td>
	            	            <td>'.$result['department'].'</td>
	            	            <td>'.$result['designation'].'</td>
	            	            
	            	            <td>'.$result['date_of_issue'].'</td>
	            	            <td>'.$result['date_of_expiry'].'</td>
	            	            <td>'.$result['qr'].'</td>
	            	            <td>'.$result['is_resign'].'</td>
	            	            <td>'.$result['status'].'</td>
	            	            <td>'.$result['add_by'].'</td>
	            	            <td>'.$result['status_id'].'</td>
	            	            <td>'.$result['printed'].'</td>
	            	            <td>'.$result['print_no'].'</td>
	            	            <td>'.$result['emp_data_id'].'</td>
	            	            <td>'.$result['company_id'].'</td>
	            	            <td>'.$result['qr_generated'].'</td>
	            	            <td>'.$result['approved'].'</td>
	            	            <td>'.$result['printed_date'].'</td>
	            	            <td>'.$result['reason_for_duplicate'].'</td>
	            	            <td>'.$result['duplicate_by_snapshot'].'</td>
	            	            <td>'.$result['card_status'].'</td>
	            	            <td>'.$result['card_status_position_date_time'].'</td>
	            	            <td>'.$result['card_status_position_chang_by'].'</td>
	            	            <td>'.$result['password'].'</td>
	            	            <td>'.$result['emp_type'].'</td>
	            	            <td>'.$result['update_by_name'].'</td>
	            	            <td>'.$result['update_reason'].'</td>
	            	            <td>'.$result['update_by_type'].'</td>
	            	            <td>'.$result['update_date'].'</td>
	            	            <td>'.$result['update_day'].'</td>
	            	            <td>'.$result['img_Update_by'].'</td>
	            	            <td>'.$result['card_status_position_change_by_name'].'</td>
                                    <td>'.$result['card_status_position_change_by_emp_id'].'</td>
                                    <td>'.$result['update_by_person_emp_id'].'</td>
	            	       </tr>';
	            	           
	            	            
	            	            
	            	           
	            }


	            $html.='</table>';

	




	            header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
				header("Content-type:   application/x-msexcel; charset=utf-8");
				header("Content-Disposition: attachment; filename=ReportofEmployeenew.xls"); 
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: private",false);
			
	            echo $html;




exit();

 ?>