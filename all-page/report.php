 <?php
 include "../config/variable.php";

   include "../template/header.php";
   include "../template/sidebar.php";

include "../config/conn.php";




// to get report of all data from data base of this id no to show all printed status 


    if(isset($_GET['id'])){



        $id=$_GET['id'];
        $sql="SELECT * FROM `employee_table2` where `id`='$id'";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);

    }

   ?>
    <div class="container bg-light bg-white my-2 rounded-3  shadow-lg bg-body rounded border">
        <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-10">
            <h3 class="text-center text-light">Printing Report</h3>
          </div>
          <div class="col-md-2">


            <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin"){  ?>

                  <a href="main.php" class="btn btn-primary">Back</a>
           <?php }else{ ?>
                   <a href="profile_template.php?id=<?php echo $id; ?>" class="btn btn-primary">Back</a>
            <?php } ?>


        </div>
          
        </div>
        
        <div class="row col-md-12">
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
                                                    <label>Recently printed Date:</label>
                                                    <p><?php echo $row['printed_date']; ?></p>
                                                </div>
                                                
                                                <div class="media">
                                                    <label>Recently Printed By:</label>
                                                    <p><?php echo $row['card_status_position_chang_by']; ?></p>
                                                </div>
                                                <div class="media">
                                                    <label>Name of Persion Card printed By :</label>
                                                    <p><?php echo $row['card_status_position_change_by_name']; ?></p>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media">
                                                   
                                                     <label>Total No Of Print:</label>
                                                    <p><?php echo $row['print_no']; ?></p>
                                                  
                                                </div>
                                               
                                                <div class="media">
                                                    <label>Id Of Person Who Recently Printed</label>
                                                    <p><?php echo $row['card_status_position_change_by_emp_id']; ?></p>
                                                </div>
                                               <div class="media">
                                                    <label>Reason For Recently print:</label>
                                                    <p><?php echo $row['reason_for_duplicate']; ?></p>
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- to show employe  profile picture  -->

                                <!-- <div class="col-lg-6" style="border:2px solid black;">
                                    <h6 class="mx-3"><b>Picture Of Person Who Recently Printed This Card</b></h6>
                                    <div class="about-avatar">
                                        <img src="<?php //echo base_link;?>asset/upload/<?php //echo $row['duplicate_by_snapshot']; ?>" title="" alt="!!!No Picture Found" width="200px" height="200px">
                                    </div>
                                
                                </div> -->
                            </div>
                           
                        </div>
                </section>

            </div>

            

        </div>
        <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-12">
            <h3 class="text-center text-light">Updation Report</h3>
          </div>
          
        </div>
         <div class="row col-md-12">
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
                                                    <label>Recently Update Date:</label>
                                                    <p><?php echo $row['update_date']; ?></p>
                                                </div>
                                                
                                                <div class="media">
                                                    <label>Name Of Person Recently Update By:</label>
                                                    <p><?php echo $row['update_by_name']; ?></p>
                                                </div>
                                                <div class="media">
                                                    <label>Recently Updation Day:</label>
                                                    <p><?php echo $row['update_day']; ?></p>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media">
                                                   
                                                     <label>Update By Type:</label>
                                                    <p><?php echo $row['update_by_type']; ?></p>
                                                  
                                                </div>
                                               
                                                <div class="media">
                                                    <label>Id Of Person Who Recently Update</label>
                                                    <p><?php echo $row['update_by_person_emp_id']; ?></p>
                                                </div>
                                                <div class="media">
                                                    <label>Update Reason:</label>
                                                    <p><?php echo $row['update_reason']; ?></p>
                                                </div>
                                                
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- to show employe  profile picture  -->

                                <!-- <div class="col-lg-6" style="border:2px solid black;">
                                    <h6 class="mx-3"><b>Picture Of Person Who Recently Update The Data</b></h6>
                                    <div class="about-avatar">
                                        <img src="<?php //echo base_link;?>asset/upload/<?php //echo $row['img_Update_by']; ?>" title="" alt="!!!No Picture Found" width="200px" height="200px">
                                    </div>
                                
                                </div> -->
                            </div>
                           
                        </div>
                </section>

            </div>

            

        </div>

        




    </div>


<?php 
   include "../template/footer.php";
?>