
 <?php
 include "../config/variable.php";
$active_link_profile="active";
   include "../template/header.php";
   include "../template/sidebar.php";

include "../config/conn.php";




// to get record  of all data from data base of this id no 


    if(isset($_GET['id'])){



        $id=$_GET['id'];
        $sql="SELECT * FROM `employee_table2` where `id`='$id'";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);

    }

   ?>

      <div class="container bg-light bg-white my-2 rounded-3  shadow-lg bg-body rounded border">



        <!-- to show success massge  -->


         <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>

                </div>


           <?php  unset($_SESSION['msg']);}?>

          <div class="row mt-2 bg-secondary py-2 col-md-12">
            <div class="col-md-6">
              <h3 class="text-center text-light">Employee Details</h3>
            </div>
             <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>

            <div class="col-md-2">
              <a href="main.php" class="btn btn-dark">Back To Employee List</a>
            </div>

             <?php } ?> 
            <div class="col-md-2">


                <!-- if the  login user is admin then only show update details options  -->


                <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") { ?>
                  
                  <a href="update_report.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update Details</a>
                <?php }else{

                    // if the login user id is matches with any user id of employee list table then only show update details options 

                            if ($_SESSION['id']==$row['id']) { ?>
                                <a href="update_report.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update Details</a>
                            <?php } ?>

                <?php } ?> 


                   
            </div>
             <div class="col-md-2">
              <a href="profile_template.php?id=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fa fa-refresh mx-1"></i>Refresh</a>
            </div>
            
          </div>
         <div class="row col-md-12">
            <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color"><b><?php echo $row['name'];?></b></h3>
                            <h3 class="theme-color lead"><b><?php echo $row['department']; ?></b></h3>
                            <h4><mark><?php echo $row['designation']; ?></mark></h4>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Email:</label>
                                        <p><?php echo $row['email']; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Mobile No</label>
                                        <p><?php echo $row['mobile']; ?></p>
                                    </div>
                                    
                                    <div class="media">
                                        <label>Blood Group</label>
                                        <p><?php echo $row['blood_group']; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Date Of Birth</label>
                                        <p><?php echo $row['date_of_birth']; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p><?php echo $row['address']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <div>
                                            
                                            <label>Employee LogIn Type</label>
                                        </div>
                                        <div class="d-flex">

                                                 <div class="mx-2">
                                                
                                                     <p><span class="badge bg-dark text-light text-center"><?php echo $row['emp_type']; ?></span></p>


                                                 </div>
                                                 
                                        </div>

                                      
                                    </div>
                                    <div class="media">
                                        <label>Joining Date</label>
                                        <p><?php echo $row['joining_date'];?></p>
                                    </div>
                                    <div class="media">
                                        <label>employee Id No</label>
                                        <p><?php echo $row['emp_id']; ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Card Status</label>
                                        <p><?php echo $row['card_status']; ?></p>
                                    </div>
                                   
                                    <div class="media">
                                        <div>
                                            
                                            <label>Status</label>
                                        </div>
                                        <div class="d-flex">

                                                 <div class="mx-2">
                                                
                                                      <?php if($row['status']=="active") { ?>
                                                           <p><span class="badge bg-success text-light text-center"><?php echo $row['status']; ?></span></p>
                                                        <?php 
                                                        }else{  ?>
                                                            <p><span class="badge bg-danger text-light text-center"><?php echo $row['status']; ?></span></p>

                                                        <?php } ?>

                                                 </div>
                                                 
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- to show employe  profile picture  -->

                    <div class="col-lg-6">
                        <label class="my-2 text-center"><p class="text-center mx-2">Employee Profile Picture</p></label>
                        <div class="about-avatar">
                            <img src="../operation/image/img/<?php echo $row['image']; ?>" title="" alt="" width="220" height="220">
                        </div>
                        <div>
                             <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") { ?>
                  
                                  <a class="btn btn-success my-3 mx-3" href="change_profile_picture.php?id=<?php echo $row['id']; ?>">Change Profile Picture</a>
                                <?php }else{

                                    // if the login user id is matches with any user id of employee list table then only show update details options 

                                            if ($_SESSION['id']==$row['id']) { ?>
                                                <a class="btn btn-success my-3 mx-3" href="change_profile_picture.php?id=<?php echo $row['id']; ?>">Change Profile Picture</a>
                                            <?php } ?>

                                <?php } ?> 
                            <!-- <a class="btn btn-success my-3 mx-3" href="<?php// echo base_link;?>all-page/change_profile_picture.php?id=<?php// echo $row['id']; ?>">Change Profile Picture</a> -->
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <hr class="dropdown-divider text-dark">
                        <!-- <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div> -->
                        <hr class="dropdown-divider text-dark">
                    </div>
                </div>
            </div>
        </section>

        </div>


        <div class="d-flex row col-md-12">

              <div class="row col-md-6">

                <!-- if the login user type is admin the show thes options like print card or generate qr -->

            <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") { ?>


                <div>
                    <a href="print_application.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Print Card</a>
                    <a href="../phpqrcode/qrgenerate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Generate QR</a>
                    <a href="report.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Report</a>
                </div>
             <?php }else{ ?>
                <div>
                    
                    <a href="report.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Report</a>


                </div>

                  
            <?php } ?>
              </div>
 <!-- to show qr image  -->
               <div class="row col-md-6">
                  <div class="container mx-5 ">
                      <div class="border border-dark border-4" style="width:260px;height:260px;">
                          <img src="../phpqrcode/temp/qr/<?php echo $row['qr']; ?>" width="250" height="250">
                      </div>
                  </div>
              </div>
         </div>  
        </div>

<?php include"../template/footer.php"?>
