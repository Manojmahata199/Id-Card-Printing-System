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
                      
                      <a href="profile_template.php?id=<?php echo $resultvalue['id'];?>" class="btn btn-dark">Back</a>
                </div>





                <!-- Script is for take snapshot for duplicate the card -->
                
                 <!--  <div class="d-flex">
                          <div>
                            

                              <div id="camera" style="width: 300px;height: 300px;border: 1px solid black;">
                                
                              </div>
                              <button onclick="take_snapshot()" class="btn btn-success my-2 text-center text-dark">Take Snapshot</button>
                           
                          </div>
                          <div>
                            
                                <div id="result" style="width: 300px; height: 300px; border: 1px solid black;"></div>
                                <div>
                                  <form method="post" action="<?php //echo base_link;?>operation/post_snapshot.php" enctype="multipart/form-data">
                                    <input type="text" name="input_image" id="input_image" value="">
                                    <input type="submit" name="img_submit" class="btn btn-success">
                                  </form>
                                </div> 
                          </div>
                          
                     </div> -->
              

                      <!-- js Script To Click image  -->
                     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
                     <script type="text/javascript">
                       

                       // Webcam.set({
                       //  width:300,
                       //  height:300,
                       //  image_format:'jpeg',
                       //  jpeg_quality:100
                       // })
                       // Webcam.attach("#camera");

                       // var data_uri;
                       // function take_snapshot(){

                       //  Webcam.snap(function(data_uri){
                       //     $("#input_image").val(data_uri);
                       //    document.getElementById('result').innerHTML='<img src="'+data_uri+'"/>';
                       //  });
                       // }
                      
                     
                     </script>
                
          

                  <div class="my-2">


                        <form action="../operation/update_report_operation.php" method="post" enctype="multipart/form-data">
                        
                                    
                                          
                                
                               
                               


                               
                                  <div class="col-md-6 my-3">

                                    <label for="update_reason" class="form-label"><b>Enter Reason for Update</b></label>
                                    <input type="text" class="form-control" name="update_reason" placeholder="Enter The Reason" id="update_reason" >
                                  </div>
                                 <!--  <div class="col-md-6">

                                   <input type="hidden" name="input_image" id="input_image" value="">
                                 </div>------>
                                 <div class="col-md-6 my-3">
                                     <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                                  </div>
                                  <div class="col-md-6 my-3">
                                     <input type="text" class="form-control" id="update_by_name" name="update_by_name" value="<?php echo $_SESSION['name']; ?>">
                                   </div>
                                  <div class="col-md-6 my-3">

                                   
                                    <input type="text" class="form-control" name="update_by_type" placeholder="Data Update By" id="update_by_type" value="<?php echo $_SESSION['emp_type']; ?>">
                                  </div>
                                  <div class="col-md-6 my-3">

                                   
                                    <input type="text" class="form-control" name="update_by_person_emp_id" placeholder="Data update_by_person_emp_id By" id="update_by_person_emp_id" value="<?php echo $_SESSION['emp_id']; ?>">
                                  </div>
                                  
                                 
                                
                                      
                               <div class="my-3">
                                  <input type="submit" name="card_select" id="card_select" value="Submit" class="btn btn-success">
                                      
                                </div>
                          
                        </form>

                  </div>
            </div>



      </div>
</div>



<?php 

include"../template/footer.php";

?>