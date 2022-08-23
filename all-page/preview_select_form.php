<?php
ob_start();

      include "../config/variable.php";

      include "../template/header.php";

     
      include "../template/sidebar.php";

    

      include "../config/conn.php";

        
       $get_id=$_GET['id'];


      
  ?>
  <div class="container my-4 bg-white my-2 rounded-3  shadow-lg bg-body rounded border">

    <div class="row col-md-12 my-2 py-2 mx-2">
         <?php if(isset($_SESSION['msg2'])){ ?>

                <div class="row col-md-12 bg-danger my-2 py-2">

                  <h4 class="text-dark text-center"><?php echo $_SESSION['msg2']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg2']);}?>

    <div>
        <a class="btn btn-secondary my-2 text-center text-light" href="main.php">Back</a>
        <form method="POST" action="../operation/preview_select_operation.php">
            
            <input type="hidden" name="id" value="<?php echo $get_id; ?>">
             <div class="col-md-6 my-3">
                      <label for="company_card" class="form-label"><b>Select Your Card</b></label>

                          <?php
                           $sqlcard="SELECT * FROM `card_design`";
                           $querycard=mysqli_query($conn,$sqlcard);

                           ?>

                          
                           <select class="form-select" aria-label="Default select example" name="company_card" id="company_card">
                             <option selected value="">Select Card</option>
                                <?php
                              
                                while ($res_card=mysqli_fetch_array($querycard)) {

                                          echo '<option value="'.$res_card['card_id'].'">'.$res_card['card_company'].'</option>';


                                     }
                                

                                 ?>
                            </select>
                        
            </div>
            <div>
                <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
            </div>
        </form>
    </div>
</div>
      
</div>

<?php 
ob_end_flush();
   include "../template/footer.php";
?>