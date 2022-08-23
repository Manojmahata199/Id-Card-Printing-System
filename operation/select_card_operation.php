<?php
session_start();
      include "../config/variable.php";

      include "../config/conn.php";

        



      if(isset($_POST['card_select'])){
         $name=$_POST['name'];
       
         $id=$_POST['id'];

          

         $company_card_id=$_POST['card_id'];

         $sqlcard="SELECT * FROM `card` WHERE `id`='$company_card_id'";
          $querycard=mysqli_query($conn,$sqlcard);
          $res_card=mysqli_fetch_array($querycard);



         $card_type=$res_card['type'];
         


         $duplicate_reason=$_POST['duplicate_reason'];
         $card_status_position_change_by=$_POST['card_status_position_change_by'];
          $card_status_position_change_by_id=$_POST['card_status_position_change_by_id'];
         $print_no_new=$_POST['print_no_new'];
         $timezone=date_default_timezone_set("Asia/Calcutta");
         $printed_date = date('Y-m-d H:i:s');
         // $printed_date= date('Y-m-d');
         $card_status_position_date_time= date('Y-m-d H:i:s');
        // $img = $_POST['input_image'];
         $card_status_position_change_by_name=$_POST['card_status_position_change_by_name'];

       //  $data=array('id'=>$id,'card_id'=>$company_card_id);
         $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                // if snapshot is not blank 
               
                  


                            // if duplicate reason input is submitted

                    if(isset($duplicate_reason)){



                             // if($img!="")
                             //    {


                                    
                                    // $img = $_POST['input_image'];
                                    // $folderPath = "../asset/upload/";
                                  
                                    // $image_parts = explode(";base64,",$img);
                                    
                                    // $image_type_aux = explode("image/", $image_parts[0]);
                                    // $image_type = $image_type_aux[1];
                                  
                                    //  $image_base64 = base64_decode($image_parts[1]);
                                    //  $fileName = ''.$id.$name.'.png';
                                  
                                    //  $file = $folderPath . $fileName;
                                    //  file_put_contents($file, $image_base64);
                  


                                   $sql="UPDATE `employee_table2` 
                                   SET `printed`='1',`print_no`='$print_no_new',`printed_date`='$printed_date',`reason_for_duplicate`='$duplicate_reason',`card_status_position_date_time`='$card_status_position_date_time',
                                   `card_status_position_chang_by`='$card_status_position_change_by',
                                   `card_status_position_change_by_name`='$card_status_position_change_by_name',`card_status_position_change_by_emp_id`='$card_status_position_change_by_id' WHERE `id`='$id'";


                                   $query=mysqli_query($conn,$sql);
                                   
                                   
                                   if($card_type=="vertical"){

                                    header('Location:../staff_id_generate/newcard.php?id='.$id.'&card_id='.$company_card_id.'');

                                   }
                                   elseif($card_type=="horizontal"){

                                    

                                    header('Location:../staff_id_generate/cardhorizontal.php?id='.$id.'&card_id='.$company_card_id.'');
                                   }
                                   
                                    else{
                                       
                                    $_SESSION['msg2']="card not selected";

                                    header('Location:../all-page/select_card.php?id='.$id.'');
                                    }
                                }
                                
                               
                

                       
                       // if duplicate reason input is not  submitted
                       else{
                            $sql="UPDATE `employee_table2` 
                            SET `printed`='1',`print_no`='$print_no_new',`printed_date`='$printed_date',`card_status_position_date_time`='$card_status_position_date_time',
                           `card_status_position_chang_by`='$card_status_position_change_by',`card_status_position_change_by_name`='$card_status_position_change_by_name',
                           `card_status_position_change_by_emp_id`='$card_status_position_change_by_id' WHERE `id`='$id'";

                           $query=mysqli_query($conn,$sql);

                                if($card_type=="vertical"){

                                header('Location:../staff_id_generate/newcard.php?id='.$id.'&card_id='.$company_card_id.'');

                               }
                               elseif($card_type=="horizontal"){

                                

                                header('Location:../staff_id_generate/cardhorizontal.php?id='.$id.'&card_id='.$company_card_id.'');
                               }
                               
                                else{
                                   
                                $_SESSION['msg2']="card not selected";

                                header('Location:../all-page/select_card.php?id='.$id.'');
                                }
                         }
                }

       
    
  ?>

