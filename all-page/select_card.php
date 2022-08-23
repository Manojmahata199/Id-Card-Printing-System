<?php


      include "../config/variable.php";

      include "../template/header.php";

     
      include "../template/sidebar.php";


      include "../config/conn.php";


      

      if(isset($_GET['id'])){



        $id=$_GET['id'];


        $sqlresult="select * from `employee_table2` WHERE `id`='$id'";

        $queryresult=mysqli_query($conn,$sqlresult);
        $resultvalue=mysqli_fetch_array($queryresult);
       
        
         $printed_or_not=$resultvalue['printed'];
         $card_status_position_change_by=$_SESSION['emp_type'];
         $card_status_position_change_by_name=$_SESSION['name'];
         $print_no=$resultvalue['print_no'];
         $card_status_position_change_by_id=$_SESSION['emp_id'];
         $name=$resultvalue['name'];
         $print_no_new=$print_no+1;
         

      
      }
?>









<div class="container my-4 bg-white my-2 rounded-3  shadow-lg bg-body rounded border">




      <!-- This is for show success massage  -->



       <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg']);}?>



           <!-- This is for show error massage  -->


           
           <?php if(isset($_SESSION['msg2'])){ ?>

                <div class="row col-md-12 bg-danger my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg2']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg2']);}?>

                        
      <div class="row my-2">
            <div class="col-md-12 my-2">


    
                        
                <div class="col-md-12 my-2">
                      
                      <a href="main.php" class="btn btn-dark">Back</a>
                </div>





                <!-- Script is for take snapshot for duplicate the card -->
                <?php //if($printed_or_not==1){ ?>
                 <!--  <div class="d-flex">
                          <div>
                            

                              <div id="camera" style="width: 300px;height: 300px;border: 1px solid black;">
                                
                              </div>
                              <button onclick="take_snapshot()" class="btn btn-success my-2 text-center text-dark">Take Snapshot</button>
                           
                          </div>
                          <div>
                            
                                <div id="result" style="width: 300px; height: 300px; border: 1px solid black;"></div>
                               < <div>
                                  <form method="post" action="<?php //echo base_link;?>operation/post_snapshot.php" enctype="multipart/form-data">
                                    <input type="text" name="input_image" id="input_image" value="">
                                    <input type="submit" name="img_submit" class="btn btn-success">
                                  </form>
                                </div> 
                          </div>
                          
                     </div> -->
              

                     <!--   js Script To Click image  -->
                     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
                     <script type="text/javascript">
                       

                     // Webcam.set({
                     //    width:300,
                     //    height:300,
                     //    image_format:'jpeg',
                     //    jpeg_quality:100
                     //   })
                     //   Webcam.attach("#camera");

                     //   var data_uri;
                     //   function take_snapshot(){

                     //    Webcam.snap(function(data_uri){
                          
                     //       $("#input_image").val(data_uri);
                     //      document.getElementById('result').innerHTML='<img src="'+data_uri+'"/>';
                          
                     //    });
                     //   }
                      
                     
                     </script>
                <?php //} ?>
          

                  <div class="my-2">
                    


                        <form action="../operation/select_card_operation.php" method="post" enctype="multipart/form-data">
                        
                               
                                          
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                <div class="col-md-6 my-3">
                                          <label for="card_id" class="form-label"><b>Select Your Card</b></label>

                                              <?php
                                               $sqlcard="SELECT * FROM `card`";
                                               $querycard=mysqli_query($conn,$sqlcard);

                                               $card_arr=array();
                                               while($res_card=mysqli_fetch_array($querycard)){

                                                 $card_arr[]=$res_card;
                                               }
                                               ?>

                                              
                                               <select class="form-select" aria-label="Default select example" name="card_id" id="card_id">
                                                 <option selected value="">Select Card</option>
                                                    <?php
                                                  
                                                    foreach($card_arr as $value) {

                                                              echo '<option value="'.$value['id'].'">'.$value['card_name'].'</option>';


                                                         }
                                                    

                                                     ?>
                                                </select>
                        
                                </div>
                                <!-- if the card is allready printed once then the reason for duplicate input is shown else only select card type input only shown -->


                                <?php if($printed_or_not==1){ ?>

                                  <div class="col-md-6 my-3">

                                    <label for="duplicate_reason" class="form-label"><b>Enter Reason for duplicate</b></label>
                                    <input type="text" class="form-control" name="duplicate_reason" placeholder="Enter The Reason" id="duplicate_reason" required>
                                  </div>
                                 <!--  <div class="col-md-6">

                                   <input type="hidden" name="input_image" id="input_image" value="">
                                 </div>
 -->
                               <?php } ?>
                                 
                                  <div class="col-md-6 my-3">

                                   
                                    <input type="hidden" class="form-control" name="card_status_position_change_by" placeholder="Card Status Position Change By" id="card_status_position_change_by" 
                                    value="<?php echo $card_status_position_change_by; ?>">
                                  </div>
                                  <div class="col-md-6 my-3">

                                   
                                    <input type="hidden" class="form-control" name="card_status_position_change_by_name" placeholder="Card Status Position Change By Name" id="card_status_position_change_by_name" value="<?php echo $card_status_position_change_by_name; ?>">
                                  </div>
                                   <div class="col-md-6 my-3">

                                   
                                    <input type="hidden" class="form-control" name="card_status_position_change_by_id" placeholder="Card Status Position Change By Id" id="card_status_position_change_by_id"
                                     value="<?php echo $card_status_position_change_by_id; ?>">
                                  </div>
                                  <div class="col-md-6 my-3">

                                   
                                    <input type="hidden" class="form-control" name="print_no_new" placeholder="Print No" id="print_no_new" value="<?php echo $print_no_new; ?>">
                                  </div>

                                 
                                
                                      
                               <div class="my-3">
                                  <input type="submit" name="card_select" id="card_select" value="Print" class="btn btn-success">
                                      
                                </div>
                          
                        </form>

                  </div>
            </div>



      </div>
</div>



<?php 

include"../template/footer.php";

?>