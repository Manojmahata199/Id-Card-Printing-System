 <?php
  include "../config/variable.php";

   include "../template/header.php";
 
   include"../config/conn.php";

        if(isset($_GET['id'])){


            $id=$_GET['id'];
           

            $sql="SELECT * FROM `card` WHERE `id`='$id'";
            $query=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($query);


            if($res=mysqli_num_rows($query)<1){
                 $row['card_name']="";
                $row['id']="";
                $row['mt_img']="";
                $row['ml_img']="";
                $row['mr_img']="";
                $row['mb_img']="";
                $row['mb_name']="";
                $row['mt_name']="";
                $row['ml_info']="";
                $row['mr_info']="";
                $row['mb_info']="";
                $row['ml_qr']="";
                $row['mr_qr']="";
                $row['mb_qr']="";
                $row['mt_qr']="";
                $row['front_img']="";
                $row['back_img']="";
                 $_SESSION['msg2']="Create A Card First";



            }
            

          }else{
            $row['card_name']="";
            $row['id']="";
            $row['mt_img']="";
            $row['ml_img']="";
            $row['mr_img']="";
            $row['mb_img']="";
            $row['mb_name']="";
            $row['mt_name']="";
            $row['ml_info']="";
            $row['mr_info']="";
            $row['mb_info']="";
            $row['ml_qr']="";
            $row['mr_qr']="";
            $row['mb_qr']="";
            $row['mt_qr']="";
            $row['front_img']="";
            $row['back_img']="";
          }


  
?>
   <style> 
body{
    
}

#board{
    background-color: black;
    padding: 10px;
}

#id {
  position: absolute;
   width:305px;
  height:482px;
  <?php if($row['front_img']){ ?>
      background: url('image/img/<?php echo $row['front_img']; ?>');  /* if you want to change the background image replace logo.png */  /*variable one for image*/
  <?php } 
  else{  ?>
     background: url('');
 <?php }  ?>
  background-repeat:repeat-x;
  background-size: 305px 482px;
  text-align:center;
  border-radius: 2%;
  margin-top: 0px;
  margin-left: 0.7px;
  background-color: red;
  margin-top: 100px;
 
}




.name{
    
     
     <?php if($row['mt_name']){ ?>
      margin-top:<?php echo $row['mt_name']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
        margin-top: 10px;  /*variable*/ 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['mb_name']){ ?>
      margin-left:<?php echo $row['mb_name']; ?>px;   if you want to change the background image replace logo.png   /*variable one for image*/*/
      <?php } 
      else{  ?>
       margin-bottom:0px;      /*variable*/
     <?php }  ?>
      /*variable*/

   

    width: 200px;
    align-items: center;
    align-items: center;
    text-align: center;
}  


.back{

    position: absolute;


    <?php if($row['mt_info']){ ?>
      margin-top:<?php echo $row['mt_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-top:150px; 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_info']){ ?>
      margin-left:<?php echo $row['ml_info']; ?>px;  /* if you want to change the background image replace logo.png  */ /*variable one for image*/*/
      <?php } 
      else{  ?>
         margin-left: 30px;  
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_info']){ ?>
      margin-right:<?php echo $row['mr_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_info']){ ?>
      margin-bottom:<?php echo $row['mb_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 
         /*variable*/ */
  
   

   height: auto;
    width: 250px;
    
    
    text-align: left;
    font-size: 12px;
    font-family: sans-serif;
     line-height: 20px;
    
}

.front{


      <?php if($row['mt_img']){ ?>
      margin-top:<?php echo $row['mt_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-top: 114px; 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_img']){ ?>
      margin-left:<?php echo $row['ml_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-left: 86px;  
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_img']){ ?>
      margin-right:<?php echo $row['mr_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_img']){ ?>
      margin-bottom:<?php echo $row['mb_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 
         /*variable*/ 
   
    height: 157px;
    width: 123px;
    
   
   /* z-index: ;*/
    
    text-align: left;
    font-size: 12px;
    font-family: sans-serif;
    background-color: white;


}

.qr{

    position: absolute;
      <?php if($row['mt_qr']){ ?>
      margin-top:<?php echo $row['mt_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-top: 30px; 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_qr']){ ?>
      margin-left:<?php echo $row['ml_qr']; ?>px;   /*if you want to change the background image replace logo.png*/   /*variable one for image*/*/
      <?php } 
      else{  ?>
         margin-left: 88px;  
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_qr']){ ?>
      margin-right:<?php echo $row['mr_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_qr']){ ?>
      margin-bottom:<?php echo $row['mb_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 
         /*variable*/ */

     
   
   
    height: 106px;
    width: 106px;
    z-index: +1;
    
    
    text-align: left;
    font-size: 12px;
    font-family: sans-serif;
    background-color: red;
    


}




.data{
    font-family: sans-serif;
    font-size: 12px;
    line-height: 16px;
}


 .id-1{
    
    width: 305px;
    height: 482px;
    background: #FFFFFF;
    text-align:center;
    font-size: 16px;
    font-family: sans-serif;
    <?php if($row['back_img']){ ?>
      background: url('image/img/<?php echo $row['back_img']; ?>');  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         background: url('');
     <?php }  ?>
     
    background-repeat:repeat-x;
    background-size: 305px 482px;
    border-radius:2%;
    margin-top: 100px;
    
    background-color: red;
            
}
.text5{
       
    <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
    text-align: center;
    align-items: center;
    font-family: sans-serif;
    font-size: 12px;
    line-height: 7px;

}
.text{
  

    <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
}
.text2{
    width: 150px;
    text-align: left;

    <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
}
.text1{
    width: 150px;
    text-align: right;


    <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
}
.text3{
    width: 150px;
    margin-left: 10px;

    <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>

}
.text4{
    width: 150px;
    margin-left: 10px;
    text-align: left;

   <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
}
.text6{
     <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>
     font-size: 13px;


}
</style>


<div class="row bg-dark my-2 rounded-3 shadow-lg rounded border col-md-12">
    <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


    <?php  unset($_SESSION['msg']);}?>
    <!--  <?php //if(isset($_SESSION['msg2'])){ ?>

                <div class="row col-md-12 bg-danger my-2 py-2">

                  <h4 class="text-light text-center"><?php //echo $_SESSION['msg2']; ?></h4>
                </div>


    <?php  //unset($_SESSION['msg2']);}?> -->


    
       <div class="row col-md-12 text-light" id="name_input">
        <form method="post" action="set_new_card_design_operation.php">
            <div class="mb-2 col-md-12 d-flex">
                
                <div class="col-md-9 mx-3">
                    <label for="card_name" class="form-label">Enter Card Name</label>
                    <input type="text" class="form-control" id="card_name" name="card_name" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-1 mx-2 my-3">
                    <input type="submit" name="name_submit" id="name_submit" class="btn btn-primary my-3 mx-2" value="Create">
                </div>
                 <div class="col-md-2 my-3">
                    
                    <a href="manage_card.php" class="btn btn-success my-3 mx-1"><b>Upload & Back</b></a>
                </div>
                  
                       
            </div> 
        </form>      
           
       </div> 


       
        
        <div class="row col-md-12 d-flex t" id="board">
                <div class="row col-md-3">
                    <div class="row col-md-10 mx-2">

                    <div class="col-md-10 bg-white" style="width:100%;height:30px;">
                        <?php if($row['card_name']){  ?>
                           <h5 class="text-center text-dark">Card Name:<?php echo $row['card_name']; ?></h5>
                       <?php }else{ ?>
                           <h5 class="text-center text-dark">Card Name:</h5>
                       <?php } ?>
                    </div>

                    <div id="id">
                        
                            <!-- to show image on the card  -->
                                          
                             <div class="container front bg-white t"  id="img">
                                <img src="../asset/image/img/image1.jpg" height="158" width="123" style="align-content: center;align-items: center;margin-left: -24px;" id="img2">

                                
              
                      
                             </div>

                             <!-- to show name on the card  -->

                              <div class="container text-center name t" id="name">
                                <h5 class="text-center  text6" id="name2"><b>Manoj Mahata</b></h5>
                                <h6 class="text-center text5 t" id="name2"><b>Department</b></h6>
                                <h6 class="text-center text5 t" id="name2"><b>Designation</b></h6>
                             </div>
                            
                           
                         
                    </div>
                    
                </div>
            </div>
                        
            <div class="row col-md-3 t">

                <div class="row col-md-10 t">
                    <div class="col-md-10 text-light t">
                         <div class="col-md-12 bg-white" style="width:100%;height:30px;">
                            <h5 class="text-center text-dark">Card Front Side</h5>
                        </div>
                        <div class="vr" style="width: 265px;"></div>
                        <form method="post" action="set_new_card_design_operation.php" enctype="multipart/form-data">

                            <?php if($row['id']){  ?>
                              <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                           <?php }else{ ?>
                               <input type="hidden" name="card_id" id="card_id" value="">
                           <?php } ?>
                            
                            <div class="d-flex">
                               <div class="mb-2 col-md-9 t">
                                  <label for="front_img" class="form-label">Front Side Card Image</label>
                                  <input type="file" class="form-control" id="front_img" name="front_img" aria-describedby="emailHelp" required>
                              
                                </div>
                                 <div class="mb-2 col-md-3 t">
                                     
                                      <!-- <input type="submit" class="form-control" id="front_img_submit" name="front_img_submit" class="btn btn-success my-4 mx-1" style="margin-top:32px; background-color: green; margin-left: 5px;"> -->
                                        <button class="btn btn-info" id="front_img_submit" name="front_img_submit" type="submit" style="margin-top:32px;margin-left: 2px;"><b>Upload</b></button>
                                </div> 
                           </div>
                       </form>
                        <div class="vr t" style="width: 265px;"></div>
                       
                        <div>
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center t my-2" style="margin-left:95px;">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>

                                    
                                    <?php if($row['mt_img']){  ?>
                                      <input type="hidden" name="mt_img" id="mt_img" value="<?php echo $row['mt_img']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_img" id="mt_img" value="">
                                   <?php } ?>

                                   
                                    <button class="btn btn-light" id="btnt_img" name="btnt_img" type="submit" ><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button>
                                </div>
                            </div>
                           </form>
                            
                            <div class="d-flex col-md-12 t">
                                <form method="post" action="set_new_card_design_operation.php">
                                <div class="col-md-2 t mx-1">
                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    <?php if($row['ml_img']){  ?>
                                      <input type="hidden" name="ml_img" id="ml_img" value="<?php echo $row['ml_img']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_img" id="ml_img" value="">
                                   <?php } ?>



                                   <button class="btn btn-light my-5 mx-3" id="btnl_img" name="btnl_img" type="submit"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
                                </div>
                                </form>
                                 <div class="col-md-6 t border border-3 border-white">
                                   <img src="../asset/image/img/image1.jpg" height="158" width="128" style="align-content: center;align-items: center; margin-left: 0px;">
                                </div>
                                 <form method="post" action="set_new_card_design_operation.php">
                                <div class="col-md-2 t mx-1">
                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    <?php if($row['ml_img']){  ?>
                                      <input type="hidden" name="ml_img" id="ml_img" value="<?php echo $row['ml_img']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_img" id="ml_img" value="">
                                   <?php } ?>



                                   <button class="btn btn-light my-5 mx-3" id="btnr_img" name="btnr_img" type="submit"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                                </div>
                                </form>
                            </div>

                            
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center t my-2" style="margin-left: 95px; margin-bottom: 7px;">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>

                                    
                                    <?php if($row['mt_img']){  ?>
                                      <input type="hidden" name="mt_img" id="mt_img" value="<?php echo $row['mt_img']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_img" id="mt_img" value="">
                                   <?php } ?>

                                   
                                    <button class="btn btn-light" id="btnb_img" name="btnb_img" type="submit" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                                </div>
                            </div>
                           </form>
                            
                        </div>
                       <div class="vr t" style="width: 265px;"></div>
                        <div>
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center my-2" style="margin-left: 100px;">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_name" id="mt_name" value="<?php echo $row['mt_name']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_name" id="mt_name" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnt_name" name="btnt_name" type="submit"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button>

                                </div>
                            </div>
                           </form>
                            <div class="d-flex col-md-12 t">
                                <div class="col-md-12 bg-white text-center text-dark">
                                    <h5 class="text-center text-dark">FULL NAME</h5>
                                 
                                </div>
                            </div>
                            
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center my-2" style="margin-left: 100px;">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_name" id="mt_name" value="<?php echo $row['mt_name']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_name" id="mt_name" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnb_name" name="btnb_name" type="submit"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>

                                </div>
                            </div>
                           </form>
                            
                        </div>
                        <div class="vr t" style="width: 265px;"></div>

                         

                        <div>
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t d-flex">
                                <div class="col-md-9">
                                     <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                <label for="text_color" class="form-label">Text Color</label>
                                <select class="form-select" aria-label="Default select example" id="text_color" name="text_color" required>


                                       <?php if($row['text_color']){  ?>
                                            <option selected value="<?php echo $row['text_color']; ?>"><?php echo $row['text_color']; ?></option>
                                       <?php }else{ ?>
                                            <option selected value="">Select Text Color</option>
                                       <?php } ?>


                                     
                                      <option value="black">Black</option>
                                      <option value="white">White</option>
                                      <option value="red">Red</option>
                                      <option value="green">Green</option>
                                      <option value="violet">Violet</option>
                                      <option value="grey">Grey</option>
                                      <option value="orange">orange</option>
                                      <option value="darkviolet">darkviolet</option>
                                      <option value="crimson">crimson</option>
                                      <option value="maroon">maroon</option>
                                      <option value="ivory">ivory</option>
                                </select>

                                </div>
                                <div class="col-md-3">
                                     <button class="btn btn-info" id="btn_color" name="btn_color" type="submit" style="margin-top:32px; margin-left: 2px;"><b>Change</b></button>
                                </div>

                                  
                                
                            </div>
                            </form>
                        </div>
                        <div class="vr" style="width: 265px;"></div>
                         
                       
                        
                         
                    </div>
                </div>
               
                
            </div>




            <div class="row col-md-3">
                <div class="row col-md-10">
                    <div class="id-1">

                        <!-- to show qr image on the card  -->


                            <div class="container qr  t" align="center" id="qr_img">
                                <img src="../asset/image/qr-demo.png" height="106" width="106" style="align-content: center;align-items: center; margin-top:0px; margin-left: -24px;" id="qr_img2">

                            </div>


                            <!-- to show employee all data on the card  -->
                            
                             
                            <div class="container back t" id="back">   
                              <p class="my-1 fs-16 text d-flex t" id="back1"><span class="text2"><b>Company Name</b></span><span class="text"><b>:</b></span><span class="text3"><b>Sanmarg</b></span></p>
                              <p class="my-1 fs-16 text d-flex t" id="back2"><span class="text2"><b>Employee Id</b></span><span class="text"><b>:</b></span><span class="text3"><b>455</b></span></p>
                              <p class="my-1 fs-16 text d-flex t" id="back3"><span class="text2"><b>Blood Group</b></span><span class="text"><b>:</b></span><span class="text3"><b>B+</b></span></p>
                              <p class="my-1 fs-16 text d-flex t" id="back4"><span class="text2"><b>Date Of Issue</b></span><span class="text"><b>:</b></span><span class="text3"><b>02-03-2022</b></span></p>
                              <p class="my-1 fs-16 text d-flex t" id="back5"><span class="text2"><b>Date Of Expiry</b></span><span class="text"><b>:</b></span><span class="text3"><b>03-04-2023</b></span></p>
                              <p class="my-1 fs-16 text d-flex t" id="back6"><span class="text2"><b>Date Of Birth</b></span><span class="text"><b>:</b></span><span class="text3"><b>15-02-1996</b></span></p>
                            </div>
                         
                             
                    </div>
                </div>
                
            </div>






            <div class="row col-md-3">
                  <div class="row col-md-10 t">
                    <div class="col-md-10 text-light t">
                        <div class="col-md-12 bg-white" style="width:100%;height:30px;">
                            <h5 class="text-center text-dark">Card Back Side</h5>
                        </div>
                         <div class="vr t" style="width: 265px;"></div>

                        <div class="mb-2 col-md-12 t">
                              <form method="post" action="set_new_card_design_operation.php" enctype="multipart/form-data">

                                        <?php if($row['id']){  ?>
                                          <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                       <?php }else{ ?>
                                           <input type="hidden" name="card_id" id="card_id" value="">
                                       <?php } ?>


                                       <div class="d-flex">
                                                <div class="mb-2 col-md- t">
                                                  <label for="back_img" class="form-label">Front Side Card Image</label>
                                                  <input type="file" class="form-control" id="back_img" name="back_img" aria-describedby="emailHelp" required>
                                              
                                                </div>
                                                 <div class="mb-2 col-md-3 t">
                                                     
                                                      <!-- <input type="submit" class="form-control" id="back_img_submit" name="back_img_submit" value="Submit" class="btn btn-success my-4 mx-1" style="margin-top:32px; background-color: green; margin-left: 5px;"> -->
                                                       <button class="btn btn-info" id="back_img_submit" name="back_img_submit" type="submit" style="margin-top:32px;margin-left: 2px;"><b>Upload</b></button>
                                                </div> 
                                       </div>
                               </form>

                          
                        </div>
                        <div class="vr t" style="width: 265px;"></div>
                        <div>



                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center t" style="margin-left: 85px;">


                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    
                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_qr" id="mt_qr" value="<?php echo $row['mt_qr']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_qr" id="mt_qr" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnt_qr" name="btnt_qr" type="submit"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button>

                                </div>
                            </div>
                            </form>


                            <div class="d-flex col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <form method="post" action="set_new_card_design_operation.php">
                                <div class="col-md-2 text-center t">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                   
                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="ml_qr" id="ml_qr" value="<?php echo $row['ml_qr']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_qr" id="ml_qr" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnl_qr" name="btnl_qr" type="submit"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
                                </div>
                                </form>
                                 <div class="col-md-6 mx-4 my-2 border border-3 border-white">
                                   <img src="../asset/image/qr-demo.png" height="123" width="120" style="align-content: center;align-items: center; margin-left: 3px;">
                                </div>
                                <form method="post" action="set_new_card_design_operation.php">
                                 <div class="col-md-2 t">

                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="ml_qr" id="ml_qr" value="<?php echo $row['ml_qr']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_qr" id="ml_qr" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnr_qr" name="btnr_qr" type="submit"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                                </div>
                               </form>
                            </div>
                            
                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center t" style="margin-left: 85px;">


                                    <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                    
                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_qr" id="mt_qr" value="<?php echo $row['mt_qr']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_qr" id="mt_qr" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnb_qr" name="btnb_qr" type="submit"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>

                                </div>
                            </div>
                            </form>

                            
                        </div>
                        <div class="vr t" style="width: 265px;"></div>
                        <div>


                            <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center my-2" style="margin-left: 95px;">


                                     <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                   
                                     <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_info" id="mt_info" value="<?php echo $row['mt_info']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_info" id="mt_info" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnt_info" name="btnt_info" type="submit"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button>
                                </div>
                            </div>
                           </form>


                            <div class="d-flex col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <form method="post" action="set_new_card_design_operation.php">
                                <div class="col-md-2 mx-2">

                                     <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>



                                   
                                    <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="ml_info" id="ml_info" value="<?php echo $row['ml_info']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_info" id="ml_info" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnl_info" name="btnl_info" type="submit"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
                                </div>
                               </form>
                                 <div class="col-md-8 bg-white t bo">
                                  
                                     <h5 class="text-center text-dark t">Information</h5>
                                      <p class="text-left text-dark t" style="font-size: 12px;line-height: 8px;"><b>Company Name:Name</b></p>
                                      <p class="text-left text-dark t" style="font-size: 12px;line-height: 8px;"><b>Employee Id:455</b></p>
                                      <p class="text-left text-dark t" style="font-size: 12px;line-height: 8px;"><b>Blood Group:B+</b></p>
                                      <p class="text-left text-dark t" style="font-size: 12px;line-height: 8px;"><b>Issue Date:07-03-1-2021</b></p>
                                      <p class="text-left text-dark t" style="font-size: 12px;line-height: 8px;"><b>Expiry Date:04-03-2022</b></p>
                                      
                                      
                                   
                                </div>
                                <form method="post" action="set_new_card_design_operation.php">
                                 <div class="col-md-2 t mx-2" >

                                     <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                   
                                     <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="ml_info" id="ml_info" value="<?php echo $row['ml_info']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="ml_info" id="ml_info" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnr_info" name="btnr_info" type="submit"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                                </div>
                               </form>
                            </div>
                            
                             <form method="post" action="set_new_card_design_operation.php">
                            <div class="col-md-12 t" style="align-content:center; align-items:center; text-align: center;">
                                <div class="col-md-4 text-center my-2" style="margin-left: 95px;">


                                     <?php if($row['id']){  ?>
                                      <input type="hidden" name="card_id" id="card_id" value="<?php echo $row['id']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="card_id" id="card_id" value="">
                                   <?php } ?>


                                   
                                     <?php if($row['mt_name']){  ?>
                                      <input type="hidden" name="mt_info" id="mt_info" value="<?php echo $row['mt_info']; ?>">
                                   <?php }else{ ?>
                                       <input type="hidden" name="mt_info" id="mt_info" value="">
                                   <?php } ?>


                                   <button class="btn btn-light" id="btnb_info" name="btnb_info" type="submit"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
                                </div>
                            </div>
                           </form>


                            
                        </div>
                        <div class="vr t" style="width: 265px;"></div>
                    </div>
                </div>
            </div>
        </div>

   
</div>







<?php include"../template/footer.php"?>