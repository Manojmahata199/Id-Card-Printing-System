 <?php
  include "../config/variable.php";

   include "../template/header.php";
   $active_link_holiday_list="active";
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
$sql="select * from `holiday_list`";

$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);

// to set record in one page 

$per_page=ceil($result/$limit);

// to set offset value 

$offset=($page-1)*$limit;


// to show all comapany name from managecompany table from database 


 $sql1="SELECT * FROM `holiday_list` ORDER BY  `date` DESC LIMIT $offset,$limit";
 $query1=mysqli_query($conn,$sql1);


// if admin add another company name


    if(isset($_POST['submit'])){


      $date=$_POST['date'];
      $reason=$_POST['reason'];
      $massage=$_POST['massage'];


      $sql2="INSERT INTO `holiday_list`(`date`, `reason`, `massage`) VALUES ('$date','$reason','$massage')";
      $query2=mysqli_query($conn,$sql2);
      $_SESSION['msg']="Holiday Added Successfully";

     }
     
     

   ?>

      <div class="container bg-white my-2 rounded-3 shadow-lg bg-body rounded border">


        <!-- to show success massage  -->

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
            <div class="col-md-8">
              <h3 class="text-center text-light">Holiday List</h3>
            </div>
             <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){  ?>
                <div class="col-md-2 my-2">
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add New Holiday
                    </button>
                </div>
              <?php } ?>
           
            <div class="col-md-2 my-2">
              <a href="holiday_list.php" class="btn btn-info"><i class="fa fa-refresh mx-1"></i>Refresh List</a>
            </div>
            
          </div>
         <div class="row col-md-12">
             <table class="table table-striped text-center">
            
                  <thead>
                    <tr>
                     
                      
                    </tr>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Reason</th>
                      <th scope="col">Massage</th>
                      <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr") { ?>
                        <th scope="col">Options</th>
                      <?php } ?>
                      
                      
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
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['reason']; ?></td>
                      <td><?php echo $row['massage']; ?></td>
                          <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){  ?>
                          <td>
                            <div class="d-flex">

                                
                               <a class="btn btn-info mx-2" href="../operation/edit_holiday.php?id=<?php echo $row['id'];?>">Edit</a>
                              
                              <a class="btn btn-danger mx-2" href="../operation/delete_holiday.php?id=<?php echo $row['id'];?>">Delete</a>
                            </div>
                          </td>
                          <?php } ?>
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
                    <a class="page-link" href="holiday_list.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                  
                  <li class="page-item"><a class="page-link" href="holiday_list.php?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="holiday_list.php?page=<?php echo $per_page; ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        
          </div>
        </div>







        <!-- modal for add holiday list -->



                <!-- Button trigger modal -->
       

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Holiday</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post">
                  <div class="mb-2 col-md-12">
                      <label for="date" class="form-label">Date</label>
                      <input type="date" class="form-control" id="date" name="date" required placeholder="Enter Date" required>
                  </div>
                  <div class="mb-2 col-md-12">
                      <label for="reason" class="form-label">Reason For Holiday</label>
                      <input type="text" class="form-control" id="reason" name="reason" required placeholder="Enter The Reason" required>
                  </div>
                  <div class="mb-2 col-md-12">
                      <label for="massage" class="form-label">Massage</label>
                       <textarea class="form-control" placeholder="Enter Massage" id="massage" name="massage" style="height: 150px;" required></textarea>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>
        </div>




       







        
  <?php include"../template/footer.php"?>

       