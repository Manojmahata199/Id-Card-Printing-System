 <?php
  include "../config/variable.php";

   include "../template/header.php";
   include "../template/sidebar.php";


   include "../config/conn.php";
   

   // to select all data from database which id is getting from the link and prefilled the form 

    if(isset($_GET['id'])){

      $id=$_GET['id'];


      $sql="SELECT * FROM `employee_table2` WHERE `id`='$id'";
      $query=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($query);
     
    }


   ?>

      <div class="container bg-white my-2 rounded-3  shadow-lg bg-body rounded border">
        <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-12">
            <h3 class="text-center">Update Employee Details</h3>
          </div>
          
        </div>
         <div class="row mt-1">
             <form method="post" action="../operation/update_details_operation.php" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                 <div class="mb-2 col-md-12">
                      <label for="emp_name" class="form-label">Employee Name</label>
                      <input type="text" class="form-control" id="emp_name" name="emp_name" value="<?php echo $row['name']; ?>" aria-describedby="emailHelp" required>
                      
                </div>
                <div class="d-flex">
                    
                   <div class="mb-2 col-md-4">
                      <label for="emp_mobile" class="form-label">Mobile No</label>
                      <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" value="<?php echo  $row['mobile']; ?>" required>
                    </div>
                     <div class="mb-2 col-md-4">
                      <label for="emp_emargency_mobile" class="form-label">Emargency No</label>
                      <input type="text" class="form-control" id="emp_emargency_mobile" value="<?php echo  $row['emargency']; ?>" name="emp_emargency_mobile">
                    </div>

                     <div class="mb-2 col-md-4">
                      <label for="emp_email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="emp_email" name="emp_email" value="<?php echo  $row['email']; ?>">
                    </div>

                </div>
                
                    
                  <div class="mb-2 col-md-12">
                   <label for="emp_address" class="form-label">Employee Address</label>
                   <input type="text" class="form-control" id="emp_address" name="emp_address" value="<?php echo  $row['address']; ?>">
                  </div>

                
                 <div class="d-flex">
                    
                     
                   
                      <div class="mb-2 col-md-4">
                        <label for="date_of_birth" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo  $row['date_of_birth']; ?>">
                      </div>
                 
                      
                      <div class="mb-2 col-md-4">
                        <label for="emp_blood_group" class="form-label">Enter Blood Group</label>
                        <select class="form-select" aria-label="Default select example" id="emp_blood_group" name="emp_blood_group">
                          <option selected value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group']; ?></option>
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
                      <div class="mb-2 col-md-4">
                          <label for="password" class="form-label">Employee Password</label>
                          <input type="text" class="form-control" id="password" name="password" value="<?php echo  $row['password']; ?>" >
                      </div>
               

                 </div>
                 

                 
                 <!-- these input field are shown only for admin user  -->

              
                 <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr") { ?>

                               <div class="d-flex">
                   
                                  <div class="mb-2 col-md-4">
                                    <label for="emp_department" class="form-label">Enter The Department</label>



                                    <!-- dropdown options on department select input from database  -->
                                     <?php
                                       $sqldepartment="SELECT * FROM `department_table`";
                                       $querydepartment=mysqli_query($conn,$sqldepartment);

                                       ?>

                                      
                                       <select class="form-select" aria-label="Default select example" name="emp_department" id="emp_department">
                                       <option selected value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                                        <?php
                                      
                                        while ($res_department=mysqli_fetch_array($querydepartment)) {

                                                  echo '<option value="'.$res_department['department_name'].'">'.$res_department['department_name'].'</option>';


                                             }
                                        

                                         ?>
                                        



                                      
                                    </select>
                                  </div>
                                  <div class="mb-2 col-md-4">
                                    <label for="emp_designation" class="form-label">Enter The Designation</label>


                                    <!-- dropdown options on designation  select input from database  -->


                                    <?php
                                       $sql_designation="SELECT * FROM `designation_table`";
                                       $query_designation=mysqli_query($conn,$sql_designation);

                                       ?>

                                    <select class="form-select" aria-label="Default select example" id="emp_designation" name="emp_designation">
                                      <option selected value="<?php echo $row['designation']; ?>"><?php echo $row['designation']; ?></option>
                                      <?php
                                      
                                        while ($res_designation=mysqli_fetch_array($query_designation)) {

                                                  echo '<option value="'.$res_designation['designation_name'].'">'.$res_designation['designation_name'].'</option>';


                                             }
                                        

                                         ?>
                                      
                                    </select>
                                  </div>
                                   <div class="mb-2 col-md-4">
                                          <label for="company_name" class="form-label">Please Enter The Company Name</label>

                                          <!-- dropdown options on managecompany  select input from database  -->



                                         
                                            <?php
                                           $sql_company="SELECT * FROM `manage_company`";
                                           $query_company=mysqli_query($conn,$sql_company);

                                           ?>
                                           
                                            <select class="form-select" aria-label="Default select example" id="company_name" name="company_name" >
                                                <option selected value="<?php echo $row['company_id']; ?>"><?php echo $row['company_id']; ?></option>
                                               <?php
                                               

                                               while ($res_company=mysqli_fetch_array($query_company)) {

                                                      echo '<option value="'.$res_company['company_name'].'">'.$res_company['company_name'].'</option>';


                                                 }
                                            

                                             ?>
                                    </select>
                                  </div>
                                </div>








                              <div class="d-flex">
                                  <div class="mb-2 col-md-4">
                                    <label for="date_of_issue" class="form-label">Date Of Issue Id Card</label>
                                    <input type="date" class="form-control" id="date_of_issue" name="date_of_issue" value="<?php echo  $row['date_of_issue']; ?>">
                                  </div>
                                   <div class="mb-2 col-md-4">
                                    <label for="date_of_expiry" class="form-label">Date Of Expiry Id Card</label>
                                    <input type="date" class="form-control" id="date_of_expiry" name="date_of_expiry" value="<?php echo  $row['date_of_expiry']; ?>">
                                  </div>
                                   <div class="mb-2 col-md-4">
                                    <label for="join_date" class="form-label">Joining Date</label>
                                    <input type="date" class="form-control" id="join_date" name="join_date" value="<?php echo  $row['joining_date']; ?>">
                                  </div>
                               

                               </div>

                              <div class="d-flex">
                               
                                  <div class="mb-2 col-md-4">
                                    <label for="is_resign" class="form-label">Resign or Not</label>
                                    <select class="form-select" aria-label="Default select example" name="is_resign" id="is_resign" >
                                      <option selected value="<?php echo  $row['is_resign']; ?>"><?php echo  $row['is_resign']; ?></option>
                                      <option value="yes">yes</option>
                                      <option value="no">no</option>
                                      
                                    </select>
                                    
                                  </div>
                                  <div class="mb-2 col-md-4">
                                    <label for="emp_status" class="form-label">Employee Status</label>
                                    <select class="form-select" aria-label="Default select example" id="emp_status" name="emp_status">
                                      <option selected value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                      <option value="active">active</option>
                                      <option value="unactive">unactive</option>
                                     
                                    </select>
                                  </div>
                                   <div class="mb-2 col-md-4">
                                    <label for="card_status" class="form-label">Card Status</label>
                                    <select class="form-select" aria-label="Default select example" id="card_status" name="card_status" >
                                      <option selected value="<?php echo $row['card_status']; ?>"><?php echo $row['card_status']; ?></option>
                                      <option value="delivered">delivered</option>
                                      <option value="on way">on way</option>
                                      <option value="cancel">cancel</option>
                                     
                                    </select>
                                  </div>
                                  
                                         

                             </div>
                             <div class="d-flex">
                                  <div class="mb-2 col-md-6">
                                      <label for="emp_id" class="form-label">Employee Id</label>
                                      <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo  $row['emp_id']; ?>" >
                                  </div>
                             
                               <?php if($_SESSION['emp_type']=="admin") { ?>
                                  <div class="mb-2 col-md-6">
                                    <label for="emp_type" class="form-label">Employee Type</label>
                                    <select class="form-select" aria-label="Default select example" name="emp_type" id="emp_type">
                                      <option selected value="<?php echo $row['emp_type']; ?>"><?php echo  $row['emp_type']; ?></option>
                                      <option value="admin">admin</option>
                                      <option value="superadmin">superadmin</option>
                                      <option value="user">user</option>
                                      <option value="hr">hr</option>
                               <?php } ?>     
                                    </select>
                                    
                                  </div>
                               
                                 
                                 
                           

                             </div>


                             
                 <?php } ?>
                 
                 
               
                <button type="submit" name="update_submit" class="btn btn-primary">Update Details</button>
                <a href="profile_template.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Cancel</a>
                <a href="profile_template.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Back To List</a>
              </form>
         </div>
      </div>


<?php include"../template/footer.php"?>



  