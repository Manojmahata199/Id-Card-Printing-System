<?php


      include "../config/variable.php";

      include "../template/header.php";

     
      include "../template/sidebar.php";


      include "../config/conn.php";
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


                  <div>
                        
                        <div class="col-md-12 my-2">
                              
                              <a href="main.php" class="btn btn-dark">Back To List</a>
                        </div>
                  </div>

                  <div class="row my-2">


                        <form action="../operation/import_excel_operation.php" method="post" enctype="multipart/form-data">
                              <div class="row d-flex">
                                    <label for="excel_file" class="form-label"><b>Enter Your Excel File</b></label>

                                    <div class="col-md-8">
                                          
                                        <div class="mb-2">
                                          
                                          <input type="file" class="form-control" id="excel_file" name="excel_file" required>
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                          
                                       <div class="mb-3">
                                          <input type="submit" name="excel_submit" id="excel_submit" value="Upload" class="btn btn-success">
                                              
                                        </div>
                                    </div>
                              </div>



                        </form>
                  </div>
                  
            </div>



      </div>
</div>



<?php 

include"../template/footer.php";

?>