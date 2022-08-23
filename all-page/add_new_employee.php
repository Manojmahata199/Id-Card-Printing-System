
 <?php
  include "../config/variable.php";
   include "../template/header.php";
   $active_link_add_employee="active";
    include "../config/conn.php";
   include "../template/sidebar.php";

   ?>


      <div class="container bg-white my-2 rounded-3 shadow-lg bg-body rounded border">




        <!--Form  for Going Add New Employee   -->

        <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-12">
            <h3 class="text-center text-light">Add New Employee</h3>
          </div>
          
        </div>
         <div class="row mt-2">
             <form method="post" action="../operation/add_new_employee_operation.php" enctype="multipart/form-data">
                <div class="mb-2 col-md-12">
                      <label for="emp_name" class="form-label">Employee Name</label>
                      <input type="text" class="form-control" id="emp_name" name="emp_name" aria-describedby="emailHelp" required>
                      
                </div>
                <div class="d-flex">
                    
                   <div class="mb-2 col-md-4">
                      <label for="emp_mobile" class="form-label">Mobile No</label>
                      <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" required>
                    </div>
                     <div class="mb-2 col-md-4">
                      <label for="emp_emargency_mobile" class="form-label">Emargency No</label>
                      <input type="text" class="form-control" id="emp_emargency_mobile" name="emp_emargency_mobile" required>
                    </div>

                     <div class="mb-2 col-md-4">
                      <label for="emp_email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="emp_email" name="emp_email" required>
                    </div>

                </div>
                
                    
                  <div class="mb-2 col-md-12">
                   <label for="emp_address" class="form-label">Employee Address</label>
                   <input type="text" class="form-control" id="emp_address" name="emp_address" required>
                  </div>


        
               
               
                <div class="mb-2 col-md-12">
                      <label for="emp_image" class="form-label">Profile Image</label>
                      <input type="file" class="form-control" id="emp_image" name="emp_image" required>
                </div>
               
                
                 <div class="d-flex mb-2">
                    
                     
                    <div class="mb-2 col-md-6">
                      <label for="join_date" class="form-label">Joining Date</label>
                      <input type="date" class="form-control" id="join_date" name="join_date" required>
                    </div>
                    <div class="mb-2 col-md-6">
                      <label for="date_of_birth" class="form-label">Date Of Birth</label>
                      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>
                 </div>
                 <div class="d-flex">
                   
                      <div class="mb-2 col-md-4">
                        <label for="emp_department" class="form-label">Enter Department</label>


                          <!-- Dynamic Dropdown  option from  Department Table -->


                          <?php
                           $sqldepartment="SELECT * FROM `department_table`";
                           $querydepartment=mysqli_query($conn,$sqldepartment);

                           ?>

                          
                           <select class="form-select" aria-label="Default select example" name="emp_department" id="emp_department" required>
                           <option selected value="">Select Department</option>
                            <?php
                          
                            while ($res_department=mysqli_fetch_array($querydepartment)) {

                                      echo '<option value="'.$res_department['department_name'].'">'.$res_department['department_name'].'</option>';


                                 }
                            

                             ?>
                            



                          
                        </select>
                        
                      </div>
                      <div class="mb-2 col-md-4">
                        <label for="emp_designation" class="form-label">Enter The Designation</label>


                        <!-- Dynamic Dropdown Option For Select Designation From Designation table  -->



                        <?php
                           $sql_designation="SELECT * FROM `designation_table`";
                           $query_designation=mysqli_query($conn,$sql_designation);

                           ?>

                        <select class="form-select" aria-label="Default select example" id="emp_designation" name="emp_designation" required>
                          <option selected value="">Select Designation</option>
                          <?php
                          
                            while ($res_designation=mysqli_fetch_array($query_designation)) {

                                      echo '<option value="'.$res_designation['designation_name'].'">'.$res_designation['designation_name'].'</option>';


                                 }
                            

                             ?>
                          
                        </select>
                      </div>
                      <div class="mb-2 col-md-4">
                        <label for="emp_blood_group" class="form-label">Enter Blood Group</label>
                        <select class="form-select" aria-label="Default select example" id="emp_blood_group" name="emp_blood_group" required>
                          <option selected value="">Select Blood Group</option>
                          <option value="A-">A-</option>
                          <option value="B-">B-</option>
                          <option value="A+">A+</option>
                          <option value="B+">B+</option>
                          <option value="O">O</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="O-">O-</option>
                          <option value="O+">O+</option>
                        </select>
                      </div>
               

                 </div>
                 <div class="d-flex">
                    <div class="mb-2 col-md-6">
                      <label for="date_of_issue" class="form-label">Date Of Issue Card</label>
                      <input type="date" class="form-control" id="date_of_issue" name="date_of_issue" required>
                    </div>
                     <div class="mb-2 col-md-6">
                      <label for="date_of_expiry" class="form-label">Date Of Expiry Card</label>
                      <input type="date" class="form-control" id="date_of_expiry" name="date_of_expiry" required>
                    </div>
                    


                 </div>
                 <div class="d-flex"> 


                    <div class="mb-2 col-md-6">
                        <label for="emp_id" class="form-label">Employee Id</label>
                        <input type="text" class="form-control" id="emp_id" name="emp_id" required>
                    </div>
                     

                     <div class="mb-2 col-md-6">
                            <label for="company_name" class="form-label">Enter Company Name</label>


                            <!-- Dynamic Dropdown Option for Company Select input from company atble from database -->

                            <?php
                           $sql_company="SELECT * FROM `manage_company`";
                           $query_company=mysqli_query($conn,$sql_company);

                           ?>
                           
                            <select class="form-select" aria-label="Default select example" id="company_name" name="company_name" required>
                              <option selected value="">Select Company</option>
                               <?php
                               while ($res_company=mysqli_fetch_array($query_company)) {

                                      echo '<option value="'.$res_company['company_name'].'">'.$res_company['company_name'].'</option>';


                                 }
                            

                             ?>
                            </select>
                    </div>


                

                   
                 </div>
                 
                 
                    
                   <div class="mb-2 col-md-12">
                    
                      <input type="hidden" class="form-control" id="add_by" name="add_by" value="<?php echo $_SESSION['emp_type']; ?>" required>
                    </div>
               
                
               
                
                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Add Employee">
                <button type="reset" class="btn btn-danger">Cancel</button>
                <a href="main.php" class="btn btn-secondary">Back To List</a>
              </form>
         </div>
      </div>


<?php 
include"../template/footer.php";
?>


