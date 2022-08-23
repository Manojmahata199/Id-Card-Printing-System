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


                 </tr>
                 <tr>
	            <td>SANJAY SINGH</td>
	            <td>9609200140</td>
	            <td>8597888988</td>
	            <td>jhon@gmail.com</td>
	            <td>address of john</td>
	            <td>emp_img/data_sanmarg-467-SANJAYSINGH-SANJAY SINGH.jpg</td>
	            <td>20.05.1977</td>
	            <td>B+</td>
	            <td>02-03-2022</td>
	            <td>JH122</td>
	            <td>It Department</td>
	            <td>Web Developer</td>	            
	            <td>02-03-2022</td>
	            <td>02-03-2022</td>
	            <td>QrImage.jpg</td>
	            <td>no</td>
	            <td>active</td>
	            <td>hr</td>
	            <td>7733</td>
	            <td>0</td>
	            <td>0</td>
	            <td>242</td>
	            <td>Sanmarg</td>
	            <td>0</td>
	            <td>0</td>
	            <td>24-03-2022  12:12:00</td>
	            <td>For testing</td>
	            <td>34admin2022-03-24 12:12:00.png</td>
	            <td>delivered</td>
	            <td>24-03-2022  12:12:00</td>
	            <td>superadmin</td>
	            <td>user</td>
	            <td>user</td>
	            <td>hr</td>
	            <td>for testing</td>
	            <td>hr</td>
	            <td>24-03-2022  12:27:28</td>
	            <td>Saturday</td>
	            <td>37Monday.png</td>
	            <td>superadmin</td>
                    <td>000</td>
	            <td>000</td>

            </tr>
	      </table>';
	           



	         




	            header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
				header("Content-type:   application/x-msexcel; charset=utf-8");
				header("Content-Disposition: attachment; filename=ReportofEmployeenew.xls"); 
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: private",false);
			
	            echo $html;




exit();

 ?>