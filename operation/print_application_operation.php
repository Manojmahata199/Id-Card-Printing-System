<?php

session_start();



    include "../config/conn.php";
    include "../config/variable.php";
    include "../library_function/functions.php";

    require '../lib/mpdf/mpdf.php';
    require '../lib/PHPMailer/class.phpmailer.php';
    require '../lib/PHPMailer/class.smtp.php';
    require '../lib/PHPMailer/PHPMailerAutoload.php';



    $hr_company=$_SESSION['company_id'];
    $hr_designation=$_SESSION['designation'];
    $hr_email=$_SESSION['email'];
    $hr_id=$_SESSION['emp_id'];


    if(isset($_POST['submit'])){

    	$emp_name=$_POST['emp_name'];
        $id=$_POST['emp_id'];
    	$print_by_id=$_POST['print_by_id'];
    	$print_by_name=$_POST['print_by_name'];
    	$reason_to_print_again=$_POST['reason_to_print_again'];

    	$timezone=date_default_timezone_set("Asia/Calcutta");
        $printed_date = date('Y-m-d H:i:s');





    	if($reason_to_print_again!=""){

    		$sql="INSERT INTO `print_application`(`emp_name`,`emp_id`, `printedby_id`, `printedby_name`, `application_date`, `reason_to_print_again`) 
    		VALUES ('$emp_name','$id','$print_by_id','$print_by_name','$printed_date','$reason_to_print_again')";

    		$query=mysqli_query($conn,$sql);





         
           

            $mail = new PHPMailer;

            $mail->isSMTP();  
            //$mail->SMTPDebug =3;                                       // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';   // Specify main and backup SMTP servers
            $mail->Debugoutput = 'html';
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'manojmahata.mid@gmail.com';                 // SMTP username
            $mail->Password = 'Manoj@1996';                           // SMTP password
            $mail->SMTPSecure = 'tls';                           // Enable encryption, 'ssl' also accepted
            $mail->CharSet = "UTF-8";
            $mail->Port = 587;

            $mail->From = 'manojmahata.mid@gmail.com';
            $mail->FromName = 'HR@SANMARG';
            $mail->addAddress('manojmahatayt@gmail.com', 'Rag Registered User 2020');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo(''.$hr_email.'', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Appply To Print Id Card';

            $Body='To<br>
            The Manager,<br>
            Sanmarg<br><br><br>


            
            I '.$print_by_name.',Designation '.$hr_designation.' of  '.$hr_company.' Company’s write this letter<br> to request you for providing me The access to Print The Id Card Of '.$emp_name.' Id: '.$id.'<br>
            in my Company For '.$reason_to_print_again.'. This will be used for official purpose only.<br><br>


            My email ID: '.$hr_email.'(Email ID) and Employee ID: '.$hr_id.' respectively. I ensure that the requested service  <br>
            will only and only be used for official purposes and I shall be held liable if found misusing the same. I am attaching <br>
            a copy of the employee ID card/ ID proof along with this letter for your kind reference<br><br>

            Go Through The Link And Approved  The request From '.$print_by_name.' To Print again <br>
            The Id Card Of '.$emp_name.'<a href="http://192.168.4.32/">Click here </a><br><br><br>




            Thanks & Regards<br>
            From: '.$print_by_name.'<br>
            Time: '.$printed_date.'<br>';
            $mail->Body=$Body;

            $mail->AltBody = 'Thanks $ Regards';
            $mail->SMTPOptions = array(
                  'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  )
              );

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

    	  



    		if($query){
    			$_SESSION['msg']="Application sent,Wait For Response";
	    		header('Location:../all-page/print_application_list.php?id='.$id.'');

    		}
    		else{
	    		$_SESSION['msg2']="Something Went Wrong!!";
	    		header('Location:../all-page/print_application.php');
    		
    	    }
    	}
    	else{
    		$_SESSION['msg2']="Please Select a Card and Enter reason!!";
    		header('Location:../all-page/print_application.php');

    	}
    }




 ?>