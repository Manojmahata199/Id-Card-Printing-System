<?php


      include "../config/variable.php";

      include "../template/header.php";

     
      include "../template/sidebar.php";


      include "../config/conn.php";



      if(isset($_GET['id'])){

            $id=$_GET['id'];
      }
?>


<div class="container my-4 bg-white my-2 rounded-3  shadow-lg bg-body rounded border">
      <div class="row my-2">
            <div class="col-md-12 my-2">


                  <div>
                         <!-- Button for back to List View  -->

                         
                        <div class="col-md-12 my-2">
                              
                              <a href="main.php" class="btn btn-dark">Back To List</a>
                        </div>
                  </div>

                  <div class="row my-2">


                        <form action="../operation/change_profile_picture_operation.php" method="post" enctype="multipart/form-data">
                              <div class="row d-flex">
                                    <label for="excel_file" class="form-label"><b>Upload Profile Picture</b></label>

                                    <div class="col-md-8">
                                          
                                        <div class="mb-2">
                                          <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" required>
                                          
                                          <input type="file" class="form-control" id="profile_img" name="profile_img" required>
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                          
                                       <div class="mb-3">
                                          <input type="submit" name="profile_submit" id="profile_submit" value="Upload" class="btn btn-success">
                                              
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