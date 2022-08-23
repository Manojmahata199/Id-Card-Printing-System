<!-- <?php
   include "../config/variable.php";
   include "../template/header.php";
   $print_application="active";
   include "../template/sidebar.php";




   
  include "../config/conn.php";
    
  include "../library_function/functions.php";


 

  // if page value is coming with link then page =get value or page =1




 if(isset($_GET['page'])){
  $page=$_GET['page'];

 }
 else{
  $page=1;
}


// getting log in user id   
$emp_session_id=$_SESSION['emp_id'];



// set limit
$limit=5;
// if login user is admin then get all application or get only login user applicatiomn 

if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){
   $sql="select * from `print_application`";
 }
 
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);

// set perpage value

$per_page=ceil($result/$limit);
// set offset value
$offset=($page-1)*$limit;

//if employee type is admin then show all appliaction else show only login user appliaction 


    if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){

      
     $sql1="SELECT * FROM `print_application`  WHERE `printedby_id`='$emp_session_id' ORDER BY  `id` DESC LIMIT $offset,$limit";
     $query1=mysqli_query($conn,$sql1);
     $numres=mysqli_num_rows($query1);
     if($numres<=0){
      $_SESSION['msg2']="No Data Found";
     }


    }
    

//SELECT * FROM wp_orders WHERE uid=1 ORDER BY id DESC LIMIT $offset, $items_per_page"



if(isset($_POST['approved_submit'])){


      $id=$_POST['application_id'];
      $application_status=$_POST['approved_input'];

      $sql2="UPDATE `print_application`  SET `application_status`='$application_status'  WHERE `id`='$id'";
      $query2=mysqli_query($conn,$sql2);
      
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
            <div class="col-md-10">
              <h3 class="text-center text-light">Print Application</h3>
            </div>
            <div class="col-md-2">
              <a href="print_application_list.php" class="btn btn-info"><i class="fa fa-refresh mx-1"></i>Refresh List</a>
            </div>
            
          </div>

           <div class="row col-md-12">
             <table class="table table-striped text-center">
            
                  <thead>
                    
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Apply By</th>

                      <th scope="col">
                         
                        Card Holder
                      </th>
                     <th scope="col">Apply By Id</th>
                     
                      
                      <th scope="col">Date</th>
                      <th scope="col">Reason</th>
                      <th scope="col">Status</th>
                     

                    </tr>
                  </thead>
                  <tbody>




      <!-- loop to show all record one by one  -->
                    <?php 
                    $r=1;

                    while($row=mysqli_fetch_array($query1)) {

                     //$name=$row['emp_name'];
                  
                    ?>
                    <tr>
                      <th scope="row"><?php echo $r;?></th>
                     <td><?php //echo $row['printedby_name'];?></td>
                   
                      <td> <?php  //echo $row['emp_name']; ?> </td>
                       <td> <?php // echo $row['printedby_id']; ?> </td>
                       
                       
                      <td><?php //echo $row['application_date'];?></td>
                      <td><?php// echo $row['reason_to_print_again'];?></td>
                      <td>
                        <div class="d-flex">
                        <!-- <a class="btn btn-danger mx-2" href="operation/delete_leave_application.php?id=">Delete</a> -->

                         

                            <?php
                            if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="superadmin"){







                                      if ($row['application_status']=='yes') { ?>
                                        <form method="post">
                                           <input type="hidden" name="approved_input" value="no">
                                          
                                            <input type="hidden" name="application_id" value="<?php echo $row['id']; ?>">
                                           <input type="submit" name="approved_submit" class="btn btn-success" value="Approved" >
                                         </form>

                                    <?php
                                   }elseif($row['application_status']=='no'){ ?>
                                     <form method="post">
                                           <input type="hidden" name="approved_input" value="yes">
                                            
                                           <input type="hidden" name="application_id" value="<?php echo $row['id']; ?>">
                                           <input type="submit" name="approved_submit" class="btn btn-danger" value="Not Approved" >
                                         </form>

                                    <?php }

                           }
                            elseif( $_SESSION['emp_type']=="hr"){

                                    if($row['application_status']=='yes'){  ?>
                                       <a href="select_card.php?id=<?php echo $row['emp_id']; ?>" class="btn btn-success"><b>Print</b></a>
                                       
                                    
                                    <?php 
                                    }elseif($row['application_status']=='no'){ ?>

                                       <a href="print_application_list.php" class="btn btn-danger"><b>Wait</b></a>
                            



                           <?php } 

                           } 

                           ?>

                            

                             
                          
                          
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





          <!-- this is for pagination part -->

          <?php 
          if($per_page>0){ ?>
                <div class="row col-md-12 my-3">
                  <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="<?php echo base_link;?>all-page/print_application_list.php?page=<?php echo 1;?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                        
                        <li class="page-item"><a class="page-link" href="<?php echo base_link;?>all-page/print_application_list.php?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>

                      <?php

                       }
                      ?>
                        <li class="page-item">
                          <a class="page-link" href="print_application_list.php?page=<?php echo $per_page; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
              
                </div>

           <?php
              }
           ?>
     


</div>





<?php include"../template/footer.php"?> -->