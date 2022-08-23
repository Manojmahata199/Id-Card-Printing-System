<?php
ob_start();
session_start();
include "../config/variable.php";
 include "../config/conn.php";


if(isset($_POST['submit'])){
         
          $id=$_POST['id'];
          $company_card_id=$_POST['company_card'];  

          if($id!=""){
                   
                  if($company_card_id==5){

                    header('Location:../all-page/preview_card_sanmarg.php?id='.$id.'');
                   }
                  elseif($company_card_id==11){

                       header('Location:../all-page/preview_card2spf.php?id='.$id.'');
                   }
                  
                   elseif($company_card_id==6){

                       header('Location:../all-page/preview_tehelka.php?id='.$id.'');
                   }
                   elseif($company_card_id==7){

                       header('Location:../all-page/preview_card3cei.php?id='.$id.'');
                   }
                   elseif($company_card_id==""){

                     $_SESSION['msg2']="card not selected";

                    header('Location:../all-page/preview_select_form.php?id='.$id.'');
                   }
                    else{
                        $_SESSION['msg2']="Selected Card Design Not available";

                    header('Location:../all-page/preview_select_form.php?id='.$id.'');

                    }
                }
        }


ob_end_flush();
    ?>