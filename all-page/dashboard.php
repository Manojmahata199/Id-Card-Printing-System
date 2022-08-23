  <?php


      include "../config/variable.php";

      include "../template/header.php";

      $active_link_dashboard="active";
      include "../template/sidebar.php";


      include "../config/conn.php";
        




        $sql1="SELECT * FROM `employee_table2`";
        $query1=mysqli_query($conn,$sql1);
        $numres1=mysqli_num_rows($query1);

        $sql2="SELECT * FROM `department_table`";
        $query2=mysqli_query($conn,$sql2);
        $numres2=mysqli_num_rows($query2);

        $sql3="SELECT * FROM `designation_table`";
        $query3=mysqli_query($conn,$sql3);
        $numres3=mysqli_num_rows($query3);




        // if this is admin then show all leave application or show all application which  is submitted by only the logged in user 

        if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr")
        {
          $sql4="SELECT * FROM `leave_application`";
          $query4=mysqli_query($conn,$sql4);
          $numres4=mysqli_num_rows($query4);
        }else{
           $id=$_SESSION['id'];
           $sql4="SELECT * FROM `leave_application` WHERE `emp_id`='$id'";
           $query4=mysqli_query($conn,$sql4);
           $numres4=mysqli_num_rows($query4);

        }
        $sql5="SELECT * FROM `manage_company`";
        $query5=mysqli_query($conn,$sql5);
        $numres5=mysqli_num_rows($query5);


        $sql7="SELECT * FROM `print_application`";
        $query7=mysqli_query($conn,$sql7);
        $numres7=mysqli_num_rows($query7);


         $sql6="SELECT * FROM `card`";
        $query6=mysqli_query($conn,$sql6);
        $numres6=mysqli_num_rows($query6);
        


       ?>


          <div class="container bg-white my-2 rounded-3  shadow-lg bg-body rounded border">


            <!-- This is for show the success massage -->


            <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg']);}?>


           

              <div class="row mt-2 bg-secondary py-2 col-md-12">
                <div class="col-md-12">
                  <h3 class="text-center text-light">


                   <!-- if admin login then show helo admin or user login show hello user -->


                   
                    <?php 
                      echo "Hello ".$_SESSION['name'];
                     
                    ?>
                 
                </h3>
                </div>
                
              </div>
             <div class=" my-5">
                 <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") {   ?>  
                <div class="btn btn-primary mx-4 my-3" style="width:200px;height:80px;">
                  <a class="text-center text-dark" href="main.php"><b>Employee</b></a>
                  <p><b><?php echo $numres1; ?> </b>Register Employee</p>
                  
                </div>
                 <?php } ?>



                <!-- This Is for only admin user  -->

                <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") {   ?>               
                
                 <div class="btn btn-warning mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-dark" href="manage_department.php"><b>Department</b></a>
                  <p class="text-light"><b><?php echo $numres2; ?> </b>Department</p>
                  
                </div>
              <?php } ?>
               <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") {   ?>      
                 <div class="btn btn-info mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-dark" href="manage_designation.php"><b>Designation</b></a>
                  <p class="text-light"><b><?php echo $numres3; ?> </b> Designation</p>
                  
                </div>
              <?php } ?>

              <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") {   ?>      
                 <div class="btn btn-success mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-dark" href="manage_company.php"><b>Company</b></a>
                  <p class="text-light"><b><?php echo $numres5; ?> </b> Company</p>
                  
                </div>
              <?php } ?>

              <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") {   ?>               
                
                 <div class="btn btn-secondary mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-dark" href="manage_card.php"><b>Card</b></a>
                  <p class="text-light"><b><?php echo $numres6; ?> </b>Card</p>
                  
                </div>
              <?php } ?>
              <?php if ($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") {   ?>               
                
                 <div class="btn btn-danger mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-light" href="print_application_list.php"><b>Print Application</b></a>
                  <p class="text-light"><b><?php echo $numres7; ?> </b>Print Application</p>
                  
                </div>
              <?php } ?>
                <div class="btn btn-dark mx-4 my-3"  style="width:200px;height:80px;">
                  <a  class="text-center text-light" href="leave_application_list.php"><b>Leave Application</b></a>
                  <p class="text-light"><b><?php echo $numres4; ?> </b>Application</p>
                  
                </div>




                
              </div>
              <div class="card-deck-xl d-flex">
                 
                 <button type="button" class="btn btn-info my-2" id="liveToastBtn">Show live Date & Time</button>
                
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <img src="../asset/image/sanmarglogo.jpg" width="30px" height="30px" class="rounded me-2" alt="...">
                      <strong class="me-auto">SANMARG</strong>
                      

                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <small class="text-center">Time Zone is <b>Kolkata,India</b> and Toadys Date And Time Is:</small>
                      <h5 class="text-center"><b><?php echo $date; ?></b></h5>
                    <h5 class="text-center">Today is: <?php echo  $day; ?></h5>
                    <div class="toast-body text-center">
                      Hello,Mr. <?php echo $_SESSION['name']; ?>
                    </div>
                  </div>
                </div>
              
            </div>
          </div>
            <script type="text/javascript">
              

              var toastTrigger = document.getElementById('liveToastBtn')
              var toastLiveExample = document.getElementById('liveToast')
              if (toastTrigger) {
                toastTrigger.addEventListener('click', function () {
                  var toast = new bootstrap.Toast(toastLiveExample)

                  toast.show()
                })
               }
            </script>




    <?php include"../template/footer.php"; ?>


