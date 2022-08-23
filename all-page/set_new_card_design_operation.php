<?php
ob_start();
session_start();

  include "../config/variable.php";
 
   include"../config/conn.php";



  
  if(isset($_POST['name_submit'])){

    $card_name=$_POST['card_name'];
    $card_type=$_POST['card_type'];

    $sql="INSERT INTO `card`(`card_name`,`type`) VALUES ('$card_name','$card_type')";
    $query=mysqli_query($conn,$sql);

    $id= $conn->insert_id;
    

    $_SESSION['msg']="Card Created Successfully";
    header("Location:set_new_card_design.php?id=".$id."");

  }

 if(isset($_POST['front_img_submit'])){




   $img=$_FILES['front_img'];
    
   $id=$_POST['card_id'];

   $image_name=$img['name'];
   $image_path=$img['tmp_name'];


   $new_path='image/img/'.$image_name.'';



    $result=move_uploaded_file($image_path,$new_path);

    
    $sql2="UPDATE `card` SET `front_img`='$image_name' WHERE `id`='$id'";
    $query2=mysqli_query($conn,$sql2);
    // $data="image submitted";
    // json_encode($data);
     $_SESSION['msg']="Image Uploaded Successfully";
    header("Location:set_new_card_design.php?id=".$id."");
           
    
  
  }
  if(isset($_POST['back_img_submit'])){

   $img=$_FILES['back_img'];
    
   $id=$_POST['card_id'];

   $image_name=$img['name'];
   $image_path=$img['tmp_name'];


   $new_path='image/img/'.$image_name.'';



    $result=move_uploaded_file($image_path,$new_path);


    
    $sql2="UPDATE `card` SET `back_img`='$image_name' WHERE `id`='$id'";
    $query2=mysqli_query($conn,$sql2);
    // $data="image submitted";
    // json_encode($data);
     $_SESSION['msg']="Image Uploaded Successfully";
    header("Location:set_new_card_design.php?id=".$id."");
    
  
  }
  
  if(isset($_POST['btnt_img'])){


    

   if($_POST['mt_img']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

      $mt_img=$_POST['mt_img'];
      $new_mt_img=$mt_img-1;
      $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `mt_img`='$new_mt_img' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }



  if(isset($_POST['btnl_img'])){


    

   if($_POST['ml_img']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

      $ml_img=$_POST['ml_img'];
     $new_ml_img=$ml_img-1;
     $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `ml_img`='$new_ml_img' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }



  if(isset($_POST['btnr_img'])){


   
   if($_POST['ml_img']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

       $ml_img=$_POST['ml_img'];
       $new_ml_img=$ml_img+1;
       $id=$_POST['card_id'];

      $sql2="UPDATE `card` SET `ml_img`='$new_ml_img' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }


  if(isset($_POST['btnb_img'])){


   

   if($_POST['mt_img']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{


        $mt_img=$_POST['mt_img'];
        $new_mt_img=$mt_img+1;
        $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `mt_img`='$new_mt_img' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }


   if(isset($_POST['btnt_name'])){



   if($_POST['mt_name']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{


      $mt_name=$_POST['mt_name'];
      $new_mt_name=$mt_name-1;
      $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `mt_name`='$new_mt_name' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }



   if(isset($_POST['btnb_name'])){


    

   if($_POST['mt_name']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

       $mt_name=$_POST['mt_name'];
       $new_mt_name=$mt_name+1;
       $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `mt_name`='$new_mt_name' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }




   if(isset($_POST['btnt_qr'])){


   

   if($_POST['mt_qr']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

         $mt_qr=$_POST['mt_qr'];
       $new_mt_qr=$mt_qr-1;
       $id=$_POST['card_id'];
      $sql2="UPDATE `card` SET `mt_qr`='$new_mt_qr' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }




   if(isset($_POST['btnb_qr'])){


   

   if($_POST['mt_qr']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

     $mt_qr=$_POST['mt_qr'];
    $new_mt_qr=$mt_qr+1;
    $id=$_POST['card_id'];

      $sql2="UPDATE `card` SET `mt_qr`='$new_mt_qr' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }



  if(isset($_POST['btnl_qr'])){


   

   if($_POST['mt_qr']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

      $ml_qr=$_POST['ml_qr'];
    $new_ml_qr=$ml_qr-1;
    $id=$_POST['card_id'];


      $sql2="UPDATE `card` SET `ml_qr`='$new_ml_qr' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }


  if(isset($_POST['btnr_qr'])){


   

   if($_POST['ml_qr']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

      $ml_qr=$_POST['ml_qr'];
    $new_ml_qr=$ml_qr+1;
    $id=$_POST['card_id'];


      $sql2="UPDATE `card` SET `ml_qr`='$new_ml_qr' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }




   if(isset($_POST['btnt_info'])){


   
   if($_POST['mt_info']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{


     $mt_info=$_POST['mt_info'];
    $new_mt_info=$mt_info-1;
    $id=$_POST['card_id'];

      $sql2="UPDATE `card` SET `mt_info`='$new_mt_info' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }

   if(isset($_POST['btnl_info'])){



   if($_POST['ml_info']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{


     $ml_info=$_POST['ml_info'];
    $new_ml_info=$ml_info-1;
    $id=$_POST['card_id'];


      $sql2="UPDATE `card` SET `ml_info`='$new_ml_info' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }



   if(isset($_POST['btnr_info'])){


    
   if($_POST['ml_info']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{


    $ml_info=$_POST['ml_info'];
    $new_ml_info=$ml_info+1;
    $id=$_POST['card_id'];

      $sql2="UPDATE `card` SET `ml_info`='$new_ml_info' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }


   if(isset($_POST['btnb_info'])){



   if($_POST['mt_info']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{



     $mt_info=$_POST['mt_info'];
    $new_mt_info=$mt_info+1;
    $id=$_POST['card_id'];

      $sql2="UPDATE `card` SET `mt_info`='$new_mt_info' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }




  if(isset($_POST['btn_color'])){


   



   if($_POST['text_color']==""   and $_POST['card_id']==""){
     $_SESSION['msg']="Inavlid To Set";
    header("Location:set_new_card_design.php?id=".$id."");
   }else{

     $text_color=$_POST['text_color'];   
     $id=$_POST['card_id'];


      $sql2="UPDATE `card` SET `text_color`='$text_color' WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      header("Location:set_new_card_design.php?id=".$id."");

   }
  }
  if(isset($_POST['save'])){

    $id=$_POST['id'];
    $mt_img=$_POST['mt_img'];
    $ml_img=$_POST['ml_img'];
    $mt_name=$_POST['mt_name'];
    $text_color=$_POST['text_color'];
    $mt_qr=$_POST['mt_qr'];
    $ml_qr=$_POST['ml_qr'];
    $mt_info=$_POST['mt_info'];
    $ml_info=$_POST['ml_info'];
    $card_type=$_POST['card_type'];


    $sql="UPDATE `card` SET `text_color`='$text_color',
    `mt_img`='$mt_img',`ml_img`='$ml_img',
    `mt_name`='$mt_name',
    `mt_qr`='$mt_qr',`ml_qr`='$ml_qr',
    `mt_info`='$mt_info',`ml_info`='$ml_info',
    `type`='$card_type' WHERE `id`='$id'";

    $query=mysqli_query($conn,$sql);
    return $query;

    
  }



   
  
  ob_end_flush();
  

?>

