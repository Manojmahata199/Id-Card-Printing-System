 <?php
  include "../config/variable.php";

   include "../template/header.php";
   $active_link_manage_card="active";
   include "../template/sidebar.php";

  include"../config/conn.php";
   
    
 if(isset($_GET['page'])){
  $page=$_GET['page'];

 }
 else{
  $page=1;
 }

   
  

// to set page value limit

$limit=5;
$sql="select * from `card`";

$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);

// to set record in one page 

$per_page=ceil($result/$limit);

// to set offset value 

$offset=($page-1)*$limit;


// to show all comapany name from managecompany table from database 


 $sql1="SELECT * FROM `card` ORDER BY  `id` ASC LIMIT $offset,$limit";
 $query1=mysqli_query($conn,$sql1);



?>

      <div class="container bg-white my-2 rounded-3 shadow-lg bg-body rounded border">


        <!-- to show success massage  -->

         <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg']);}?>

           <!-- to show error massage  -->

           

          <div class="row mt-2 bg-secondary py-2 col-md-12">
            <div class="col-md-8">
              <h3 class="text-center text-light">All Card List</h3>
            </div>
            <div class="col-md-2">
      
              <div class="my-2">

                  <a href="set_new_card_design.php" class="btn btn-primary mx-2"><i class="fa fa-plus mx-1"></i>Add New Card</a>
                  <!-- <input type="text" class="form-control col-md-12 mx-2" placeholder="Add New Card" name="card_company" required>
                  <input class="btn btn-primary mx-2" type="submit" name="submit" value="Add">
                   -->
                </div>
            
            </div>
            <div class="col-md-2 my-2">
              <a href="manage_card.php" class="btn btn-info"> <i class="fa fa-refresh mx-1"></i>Refresh List</a>
            </div>
            
          </div>
         <div class="row col-md-12">
             <table class="table table-striped text-center">
            
                  <thead>
                    <tr>
                     
                      
                    </tr>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Card Name</th>
                      <!-- <th scope="col">option</th> -->
                      
                      
                    </tr>
                  </thead>
                  <tbody>


                    <!-- to show alll company record  -->
                    

                    <?php 
                      $r=$offset+1;
                      while($row=mysqli_fetch_array($query1)){
                    ?>
                    <tr>
                      <th scope="row"><?php echo $r;?></th>
                      <td><?php echo $row['card_name']; ?></td>
                      <td>
                        <div class="d-flex">


                          <?php if($row['type']=="vertical") {  ?>
                          
                               <a href="set_new_card_design.php?id=<?php echo $row['id']; ?>" class="btn btn-info mx-2 my-2 text-center text-dark"><b>Edit</b></a> 
                           <?php    }else{ ?>
                               <a href="set_new_card_horizontal.php?id=<?php echo $row['id']; ?>" class="btn btn-info mx-2 my-2 text-center text-dark"><b>Edit</b></a>
                           <?php } ?>


                        </div>
                      </td>
                    </tr>


                    <?php
                     
                     $r++;
                   }

                    ?>

                  </tbody>
              
             </table>
          </div>




          <!-- this is for pagination part  -->


          <div class="row col-md-12 my-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="manage_card.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                  
                  <li class="page-item"><a class="page-link" href="manage_card.php?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="manage_card.php?page=<?php echo $per_page; ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        
          </div>
        </div>

  <?php include"../template/footer.php"?>
