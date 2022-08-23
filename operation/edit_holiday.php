<?php
  include "../config/variable.php";

  include "../template/header.php";
   
  include "../template/sidebar.php";   

  include "../config/conn.php";
   

   

   if(isset($_GET['id'])){ 

    $id=$_GET['id'];
    $sql="SELECT * FROM `holiday_list` WHERE `id`='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
  }
  
      
      

      
    


   ?>



   <div class="container bg-white my-2 rounded-3  shadow-lg bg-body rounded border">
          <div class="row mt-2 bg-secondary py-2 col-md-12">
            <div class="col-md-12">
              <h3 class="text-center">Update Holiday Details</h3>
            </div>
            
          </div>
         <div class="row mt-1">
             <form method="post" action="../operation/edit_holiday_operation.php" enctype="multipart/form-data">
                  <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">

                <div class="mb-2 col-md-12">
                      <label for="date" class="form-label">Date</label>
                      <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date']; ?>" required>
                      
                </div>
               
                    
               <div class="mb-2 col-md-12">
                  <label for="reason" class="form-label">Reason</label>
                  <input type="text" class="form-control" id="reason" name="reason" value="<?php echo  $row['reason']; ?>" required>
                </div>
               <div class="mb-2 col-md-12">
                <label for="massage" class="form-label">Massage</label>
                <input type="text" class="form-control" id="massage" value="<?php echo  $row['massage']; ?>" name="massage" required>
              </div>
              <div>
                <input type="submit" name="submit" value="Update" class="my-2 btn btn-success">
                <a href="../all-page/holiday_list.php" class="btn btn-secondary mx-2">Back</a>
              </div>
                
            </form>
          </div>
  </div>




<?php include"../template/footer.php" ?>
                     