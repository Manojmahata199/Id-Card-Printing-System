<?php

session_start();



    include "../config/conn.php";
    include "../config/variable.php";
    include "../library_function/functions.php";
if(isset($_POST['img_submit']))
{


    
    $img = $_POST['input_image'];
    $folderPath = "../asset/upload/";
  
    $image_parts = explode(";base64,",$img);
    
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
     $image_base64 = base64_decode($image_parts[1]);
     $fileName = uniqid() . '.png';
  
     $file = $folderPath . $fileName;
     file_put_contents($file, $image_base64);
  
     print_r($fileName);
  

}











?>