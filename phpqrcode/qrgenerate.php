<?php  
ob_start(); 
session_start(); 

    include "qrlib.php";



   include "../config/variable.php";

   include "../config/conn.php";



// to generate qr code of a selected employee 
    if(isset($_GET['id'])){



        $id=$_GET['id'];
        $sql="SELECT * FROM `employee_table2` where `id`='$id'";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);

    

    
        $id=$row['id'];
        $emp_id=$row['emp_id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $emargency_mobile=$row['emargency'];
        $address=$row['address'];
        $department=$row['department'];
        $company_id=$row['company_id'];
        $qr_generated="1";

        $text="".$company_id."\n"."Name:".$name."\n"."Mobile:".$mobile."\n"."Emargency Mobile:".$emargency_mobile."\n"."Address:'.$address.'';
        
         $d=dirname(__FILE__);
         $name=$row['name'].'.png';
         $filename=$d.'/temp/qr/'.$row['name'].'.png';


         $ecc="H";

        
       
        QRcode::png($text,$filename,$ecc,8,2);    
            
        

        $sql2="UPDATE `employee_table2` 
                SET `qr`='$name',`qr_generated`='$qr_generated'
                WHERE `id`='$id'";
       
        $query2=mysqli_query($conn,$sql2);

         $_SESSION['msg']="QR Code Generated Successfully";

        header('Location:../all-page/profile_template.php?id='.$id.'');

        
            
        
        

        
    }



    // to generate all employee qr code 
    else{




        $sql="SELECT * FROM `employee_table2`";
        $query=mysqli_query($conn,$sql);
        

    
        while($row=mysqli_fetch_assoc($query)){
    
            $id=$row['id'];
            $emp_id=$row['emp_id'];
            $name=$row['name'];
            $mobile=$row['mobile'];
             $emargency_mobile=$row['emargency'];
            $address=$row['address'];
            $department=$row['department'];
            $company_id=$row['company_id'];
            $qr_generated="1";

            $text=''.$company_id.''.'\r\n'.'Name:'.$name.''.'\r\n'.'Mobile:'.$mobile.''.'\r\n'.'Emargency Mobile:'.$emargency_mobile.''.'\r\n'.'Address:'.$address.'';

           $d=dirname(__FILE__);
           $name=$row['name'].'.png';
          $filename=$d.'/temp/qr/'.$row['name'].'.png';


             $ecc="H";

            
           
            QRcode::png($text,$filename,$ecc,8,2);    
                
            

            $sql2="UPDATE `employee_table2` 
                     SET `qr`='$name',`qr_generated`='$qr_generated'
                      WHERE `id`='$id'";
           
            $query2=mysqli_query($conn,$sql2);
        }
         $_SESSION['msg']="QR Code Generated Successfully";


        header('Location:../all-page/main.php');
       exit();

        
            






    }
ob_end_flush();
    
 ?>  
   