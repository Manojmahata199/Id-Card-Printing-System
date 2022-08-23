 <?php
  include "../config/variable.php";

   include "../template/header.php";
   $active_link_manage_company="active";
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
$sql="select * from `manage_company`";

$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);

// to set record in one page 

$per_page=ceil($result/$limit);

// to set offset value 

$offset=($page-1)*$limit;


// to show all comapany name from managecompany table from database 


 $sql1="SELECT * FROM `manage_company` ORDER BY  `company_name` DESC LIMIT $offset,$limit";
 $query1=mysqli_query($conn,$sql1);


// if admin add another company name


    if(isset($_POST['submit'])){


      $company_name=$_POST['company_name'];


      $sql2="INSERT INTO `manage_company`(`company_name`) VALUES ('$company_name')";
      $query2=mysqli_query($conn,$sql2);
      $_SESSION['msg']="company Added Successfully";

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
            <div class="col-md-5">
              <h3 class="text-center text-light">All Company List</h3>
            </div>
            <div class="col-md-5">
              <form method="post">
              <div class="my-2 d-flex col-md-9">

                  
                  <input type="text" class="form-control col-md-12 mx-2" placeholder="Add New Company" name="company_name" required>
                  <input class="btn btn-primary mx-2" type="submit" name="submit" value="Add">
                  
                </div>
              </form>
            </div>
            <div class="col-md-2 my-2">
              <a href="manage_company.php" class="btn btn-info"><i class="fa fa-refresh mx-1"></i>Refresh List</a>
            </div>
            
          </div>
         <div class="row col-md-12">
             <table class="table table-striped text-center">
            
                  <thead>
                    <tr>
                     
                      
                    </tr>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Company Name</th>
                      <th scope="col">option</th>
                      
                      
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
                      <td><?php echo $row['company_name']; ?></td>
                      <td>
                        <div class="d-flex">
                          
                          <a class="btn btn-danger" href="../operation/delete_company.php?id=<?php echo $row['company_id'];?>">Delete</a>
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
                    <a class="page-link" href="manage_company.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                  
                  <li class="page-item"><a class="page-link" href="manage_company.php?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="manage_company.php?page=<?php echo $per_page; ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        
          </div>
        </div>

  <?php include"../template/footer.php"?>
