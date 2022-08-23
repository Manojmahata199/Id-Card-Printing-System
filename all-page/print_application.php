<?php
   include "../config/variable.php";
   include "../template/header.php";
  
   include "../template/sidebar.php";




   
  include "../config/conn.php";
    
  include "../library_function/functions.php";

if(isset($_GET['id'])){

    $id=$_GET['id'];




  
  $sqlofname="SELECT * FROM `employee_table2` WHERE `id`='$id'";
  $queryofname=mysqli_query($conn,$sqlofname);
  $resofname=mysqli_fetch_array($queryofname);


    $print_by_id=$_SESSION['emp_id'];
    $print_by_name=$_SESSION['name'];
}

 

?>
<div class="container bg-white my-2 rounded-3   border shadow-lg bg-body rounded">


         <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg']);}?>



           <!-- to show error massage  -->


           <?php if(isset($_SESSION['msg2'])){ ?>

                <div class="row col-md-12 bg-danger my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg2']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg2']);}?>


          <div class="row mt-2 bg-secondary py-2 col-md-12">
          <div class="col-md-12">
            <h3 class="text-center text-light">Print Application Form</h3>
          </div>
          
        </div>
        <div class="row mt-2">
             <form method="post" action="../operation/print_application_operation.php" enctype="multipart/form-data">
                
                 <div class="mb-2 col-md-12">
                      
                      <input type="hidden" class="form-control" id="emp_name" name="emp_name" value="<?php echo $resofname['name']; ?>" aria-describedby="emailHelp" required>
                      
                </div>
                 
                 <div class="mb-2 col-md-12">
                      
                      <input type="hidden" class="form-control" id="emp_id" name="emp_id" value="<?php echo $resofname['id']; ?>" aria-describedby="emailHelp" required>
                      
                </div>
                 
                 <div class="mb-2 col-md-12">
                     
                      <input type="hidden" class="form-control" id="print_by_id" name="print_by_id" value="<?php echo $print_by_id; ?>" aria-describedby="emailHelp" required>
                      
                </div>
                 <div class="mb-2 col-md-12">
                      
                      <input type="hidden" class="form-control" id="print_by_name" name="print_by_name" value="<?php echo $print_by_name; ?>" aria-describedby="emailHelp" required>
                      
                </div>
                
                
                 <div class="mb-2 col-md-12">
                      <label for="reason_to_print_again" class="form-label"><b>Enter The Reason For Print Again</b></label>
                      <input type="text" class="form-control" id="reason_to_print_again " name="reason_to_print_again" aria-describedby="emailHelp" required>
                      
                </div>
                 <div class="mb-2 col-md-12 d-flex">
                    
                     <input type="submit" name="submit" id="submit" value="Apply" class="btn btn-success mx-2">
                     <button type="reset" class="btn btn-danger mx-2">Cancel</button>
                
                      
                </div>
             </form>
         </div>




</div>














<?php include"../template/footer.php"?>