   <?php
   include "../config/variable.php";
   include "../template/header.php";
   $active_link_main="active";
   include "../template/sidebar.php";




   
  include "../config/conn.php";
    
  include "../library_function/functions.php";

// if page value is coming with link then page =getpage else page=1

 if(isset($_GET['page'])){
  $page=$_GET['page'];

 }
 else{
  $page=1;
}

   
  


// to set limit per page 
$limit=5;
  
$sqlresult="select * from `employee_table2`";
$queryresult=mysqli_query($conn,$sqlresult);
$result=mysqli_num_rows($queryresult);

// to get perpage or page no  value 
$per_page=ceil($result/$limit);

$offset=($page-1)*$limit;

 $sql="SELECT * FROM `employee_table2` ORDER BY  `name` ASC LIMIT $offset,$limit";
 $query=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($query);
      if($num<=0){
        $_SESSION['msg2']="Data Not Found";
      }

 $m=1;


// if user search by name ,id,company name ,or department name  

if(isset($_POST['search_submit'])){

     $input=$_POST['search_input'];
     if($input!=""){


        $sql="SELECT * FROM `employee_table2` WHERE `name` like '%$input%' or `department`like '%$input%' or `company_id` like '%$input%' or `emp_id` like '%$input%'";
        $query=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($query);
        if($num<=0){
          $_SESSION['msg2']="Data Not Found";
        }
      }
      
}
 
// if user filter the table 

  if(isset($_POST['filter_submit'])){
   $select_department=$_POST['department_select'];
    $company_select=$_POST['company_select'];

       if(isset($_GET['submit_pagination'])){

         $page=$_GET['page'];
       }
       else{
        $page=1;
       }

       $limit=5;
        
      $sqlresult="select * from `employee_table2`";
      $queryresult=mysqli_query($conn,$sqlresult);
      $result=mysqli_num_rows($queryresult);


      $per_page=ceil($result/$limit);

      $offset=($page-1)*$limit;

       // $sql="SELECT * FROM `employee_table` ORDER BY  `emp_name` DESC LIMIT $offset,$limit";
       // $query=mysqli_query($conn,$sql);

       // if only department input is submitted and company input is blank

        if ($select_department!=""  && $company_select=="") {

            $sql="SELECT * FROM `employee_table2` WHERE `department`='$select_department'";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
            if($num<=0){
              $_SESSION['msg2']="Data Not Found";
            }
           
        }
        // if company is submitted and department is blank 

        elseif ($select_department==""  && $company_select!="") {
            $sql="SELECT * FROM `employee_table2` WHERE `company_id`='$company_select'";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
            if($num<=0){
              $_SESSION['msg2']="Data Not Found";
            }
            
        }

        // if department and company anme both are submittted in filter form

        elseif($select_department!=""  && $company_select!=""){

            $sql="SELECT * FROM `employee_table2` WHERE  `department`='$select_department' and `company_id`='$company_select'";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
            if($num<=0){
              $_SESSION['msg2']="Data Not Found";
            }
          
        }


        // if user not filter and search then show only default view


        else{

           $sql="SELECT * FROM `employee_table2` ORDER BY  `name` asc LIMIT $offset,$limit";
           $query=mysqli_query($conn,$sql);
           $num=mysqli_num_rows($query);
          if($num<=0){
            $_SESSION['msg2']="Data Not Found";
          }

        }

      $m=0;
      

  }
 
      
      



?>


      <div class="container bg-white my-2 rounded-3   border shadow-lg bg-body rounded">


      <!-- if the user is admin type then show these option like qr generate ,export,import -->

        <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr")  { ?>

            <div class="col-md-12 my-1">
              <div class="d-flex">
                <a style="height:40px;width: 120px;" class="btn btn-primary mx-2  text-light col-md-2" href="../phpqrcode/qrgenerate.php"><span style="font-size: 12px;"><b>Generate All Qr</b></span></a>
                
                <a style="height:40px;width: 100px;" class="btn btn-warning mx-2  text-light col-md-1" href="export_excel.php"><span style="font-size: 12px;"><b>Export</b></span></a>
                <a style="height:40px;width: 100px;" class="btn btn-success mx-2 text-light col-md-1" href="file_import.php"><span style="font-size: 12px;"><b>Import</b></span></a>
                <a style="height:40px;width: 140px;" class="btn btn-info mx-2  text-light col-md-1" href="export_demo_excel.php"><span style="font-size: 12px;"><b>Export Demo File</b></span></a>
                
              </div>
              
            </div>
          <?php
         }
         ?>


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

                        


    
          

          <div class="row bg-secondary my-1 py-1" style="width:100%;">
            <div class="col-md-7">
              <h3 class="text-center text-light my-2">All Employee List</h3>
            </div>




            <!-- add new employee form for only admin user  -->
            <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr"){ ?>

            
            <div class="col-md-3">
              <a href="add_new_employee.php" class="btn btn-primary my-2"><i class="fa fa-user-plus mx-1"></i>Add New Employee</a>
            </div>

            <?php
            }
            ?>
             <div class="col-md-2">
              <a href="main.php" class="btn btn-info my-2"><i class="fa fa-refresh mx-1"></i>Refresh List</a>
            </div>
            
          </div>
          <div class="row col-md-12">
             <table class="table table-striped text-center" style="font-size:10px;" border="1">
            
                  <thead>
                    <tr>




                       <!-- filter form  for filter the employee list by company anme and department name  -->
                      <form method="post">
                     
                      <th colspan="6" scope="col">
                         <div class="my-1 mx-2">


                          <!-- dropdown option from manage company datatable from database  -->


                          <?php
                           $sql_company="SELECT * FROM `manage_company`";
                           $query_company=mysqli_query($conn,$sql_company);

                           ?>
                          
                          <select class="form-select" name="company_select" aria-label="Default select example">
                            <option selected value="">Select Company</option>
                            <?php
                            while ($res_company=mysqli_fetch_array($query_company)) {

                                      echo '<option value="'.$res_company['company_name'].'">'.$res_company['company_name'].'</option>';


                                 }
                            

                             ?>
                            
                             
                          </select>
                                                    
                        </div>
  
                        
                      </th>
                       <th colspan="6" scope="col">
                        
                        <div class="my-1 mx-2">



                          <!-- dropdown option from deprtment table from database for department select input  -->

                          <?php
                           $sqldepartment="SELECT * FROM `department_table`";
                           $querydepartment=mysqli_query($conn,$sqldepartment);

                           ?>
                          
                          <select class="form-select" name="department_select" aria-label="Default select example">
                            <option selected value="">Select Department</option>
                            <?php
                            while ($res_department=mysqli_fetch_array($querydepartment)) {

                                      echo '<option value="'.$res_department['department_name'].'">'.$res_department['department_name'].'</option>';


                                 }
                            

                             ?>
                            
                             
                          </select>
                                                    
                        </div>
  
                      </th>
                    
                      
                      <th colspan="2" scope="col">
                        <div class="my-1 mx-2">
                          
                          <button type="submit" class="form-control btn btn-primary" id="submit" name="filter_submit" aria-describedby="emailHelp"><i class="fa fa-filter mx-1"></i>Filter</button>
                          
                        </div>
                        
                      </th>
                    </form>
                      
                    </tr>
                    <tr>
                      <td scope="col"><b>#</b></td>
                      <td scope="col"><b>Employee Name</b></td>
                     
                      <td scope="col"><b>Email</b></td>
                      <td scope="col"><b>Mobile</b></td>
                      
                      <td scope="col"><b>Department</b></td>
                      <td scope="col"><b>Designation</b></td>
                      <td scope="col"><b>Print</b></td>
                      <td scope="col"><b>Emp Status</b></td>
                     
                     <td scope="col"><b>Card Status</b></td>
                     <td scope="col"><b>Options</b></td>
                      <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>
                           <td scope="col"><b>Reports</b></td>
                      <?php }?>
                     <td scope="col"><b>Resign or Not</b></td>
                     <td scope="col"><b>Profile Image</b></td>
                      <td scope="col"><b>Qr Code</b></td>

                    </tr>
                  </thead>
                  <tbody>


                    <?php 
                    $r=$offset+1;

                    while($row=mysqli_fetch_array($query)) {

                    
                  
                    ?>
                    <tr>
                      <th scope="row"><b><?php echo $r ;?></b></th>
                      <td><b><?php echo $row['name'];?></b></td>
                     
                      <td><b><?php echo $row['email'];?></b></td>
                      <td><b><?php echo $row['mobile'];?></b></td>
                      
                      <td><b><?php echo $row['department'];?></b></td>
                      <td><b><?php echo $row['designation'];?></b></td>

                      <td>



                        <!-- if the printed value of user is o the show print on btn or show print again -->

                        <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") { ?>

                                <?php if($row['printed']=="0") { ?>

                                       <a class="btn btn-primary mx-2" style="font-size:12px;" href="select_card.php?id=<?php echo $row['id'];?>">Print</a>
                              <?php }else{ ?>
                                        <!-- <a class="btn btn-primary mx-2 my-1" style="font-size:12px;" href="<?php //echo base_link;?>all-page/select_card.php?id=<?php echo $row['id'];?>">Print Again</a> -->
                                        <a class="btn btn-primary mx-2" style="font-size:12px;" href="print_application.php?id=<?php echo $row['id'];?>">Print Again</a>
                              <?php }



                        }else{ ?>
                              <?php if($row['printed']=="0") { ?>

                                       <p class="btn btn-primary mx-2" style="font-size:12px;">Print</p>
                              <?php }else{ ?>
                                        <p class="btn btn-primary mx-2" style="font-size:12px;">Print Again</p>
                              <?php } 

                         }?>   

                        
                      </td>


                      <!-- if the user status is active then show active else show unactive  -->

                      <td>
                            <?php if($row['status']=="active") { ?>
                               <p><span class="btn btn-success text-light text-center" style="font-size:12px;"><?php echo $row['status']; ?></span></p>
                            <?php 
                            }else{  ?>
                                <p><span class="btn btn-danger text-light text-center" style="font-size:12px;"><?php echo $row['status']; ?></span></p>

                            <?php } ?>
                      </td>


                      <!-- if the user card status is delivered the n show delivered else show other value like on way,cancel -->

                      <td>
                        
                           <?php  if($row['card_status']=="delivered") { ?>

                               <p><span class="btn btn-success mx-2" style="font-size:12px;"><?php echo $row['card_status']; ?></span></p>

                              
                           <?php } else{ ?>
                            <p><span class="btn btn-danger mx-2" style="font-size:12px;"><?php echo $row['card_status']; ?></span></p>

                               
                            <?php  } ?>

                      
                      </td>

                      <td>


                        <!-- button for going details view  -->


                        <div class="d-flex">
                          
                          
                          <a class="btn btn-info mx-2" style="font-size:12px;" href="profile_template.php?id=<?php echo $row['id'];?>">Details</a>

                          
                          
                        </div>
                      </td>
                      


                        <!-- button for going details view  -->


                        
                     <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>
                      <td>
                            <div class="d-flex">
                          
                               <a class="btn btn-warning mx-2" style="font-size:12px;" href="report.php?id=<?php echo $row['id'];?>">Reports</a>
                             </div>
                       </td>
                      <?php }?>

                          
                          
                        
                     
                       

                       <!-- if  is_resign value of the user in database table is yes then show resign else show not resign  -->


                      <td>
                        <?php if($row['is_resign']=="yes"){ ?>
                          <p><span class="btn btn-danger text-light text-center" style="font-size:12px;">Resign</span></p>


                        <?php }else{ ?>
                           <p><span class="btn btn-success text-light text-center" style="font-size:12px;">Not Resign</span></p>

                         <?php } ?>

                        </td>

                       <!-- for show image and qr code  -->



                      <td><img src="../operation/image/img/<?php echo $row['image']; ?>" style="width: 80px;height: 80px;"></td>
                      <td><img src="../phpqrcode/temp/qr/<?php echo $row['qr']; ?>" style="width: 80px;height: 80px;"></td>
                    </tr>



                  <?php 
                  $r++;

                }
                
                ?>
                   
                   
                   </tbody>
              
             </table>
          </div>



          <!-- this is for pagination part  -->


         <?php if($m==1){?>
          <div class="row col-md-12 my-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="main.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                  
                       <li class="page-item"><a class="page-link" href="main.php?page=<?php echo $p; ?>"><?php echo $p;  ?></a></li>
                <?php

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="main.php?page=<?php echo $per_page; ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        
          </div>
          <?php
        }
        if($m==0){
        ?>
         <div class="row col-md-12 my-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="main.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) {


                  
                  echo '
                  
                      <li class="page-item">
                      <form method="POST">
                          <input type="hidden" name="page" value="'.$p.'" >
                          <input type="submit" name="submit_pagination" class="page-link" value="'.$p.'">
                       </form>
                       </li>';

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="main.php?page=<?php echo $per_page; ?>" aria-label="Next">
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


<?php include"../template/footer.php"?>



