 <?php
   include "../config/variable.php";
   include "../template/header.php";
   $active_link_leave_application="active";
   include "../template/sidebar.php";
   include "../config/conn.php";
    



   




    $sql="SELECT * FROM `leave_application`";



   ?>

   <!-- Form for apply leave application -->

   
      <div class="container bg-white my-2 rounded-3  shadow-lg bg-body rounded border">
        <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-12">
            <h3 class="text-center text-light">Leave Application Form</h3>
          </div>
          
        </div>
         <div class="row mt-2">
             <form method="post" action="../operation/leave_application_operation.php">

                 <div class="mb-3">
                  <input type="hidden" class="form-control" id="emp_id" name="emp_id" value="<?php echo $_SESSION['id']; ?>" required>
                </div>             
                <div class="mb-3">
                  <label for="emp_name" class="form-label">Employee Name</label>
                  <input type="text" class="form-control" id="emp_name" name="emp_name" aria-describedby="emailHelp" required>
                  
                </div>
               
                <div class="mb-3">
                  <label for="emp_mobile" class="form-label">Mobile No</label>
                  <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" required>
                </div>
                <div class="mb-3">
                  <label for="leave_date" class="form-label">Date For Leave</label>
                  <input type="date" class="form-control" id="leave_date" name="leave_date" required>
                </div>
                <div class="mb-3">
                    <label for="reason" class="form-label">Reason For Leave</label>
                    <textarea class="form-control" placeholder="Write The Reason For Leave" id="reason" name="reason" style="height: 150px;"></textarea>
                    
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit Application</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
                
              </form>
         </div>
      </div>


<?php include"../template/footer.php"?>


