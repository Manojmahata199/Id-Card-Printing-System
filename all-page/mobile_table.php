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

 $sql="SELECT * FROM `employee_table2` ORDER BY  `name` DESC LIMIT $offset,$limit";
 $query=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($query);
      if($num<=0){
        $_SESSION['msg2']="Data Not Found";
      }

 $m=1;


// if user search by name ,id,company name ,or department name  

if(isset($_POST['search_submit'])){

     $input=$_POST['search_input'];


      $sql="SELECT * FROM `employee_table2` WHERE `name` like '%$input%' or `department`like '%$input%' or `company_id` like '%$input%' or `emp_id` like '%$input%'";
      $query=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($query);
      if($num<=0){
        $_SESSION['msg2']="Data Not Found";
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

           $sql="SELECT * FROM `employee_table2` ORDER BY  `name` DESC LIMIT $offset,$limit";
           $query=mysqli_query($conn,$sql);
           $num=mysqli_num_rows($query);
          if($num<=0){
            $_SESSION['msg2']="Data Not Found";
          }

        }

      $m=0;
      

  }
 
      
      



?>


      <div class="container bg-white my-2 rounded-3 shadow-lg bg-body rounded border" style="width:400px;">


      <!-- if the user is admin type then show these option like qr generate ,export,import -->

        <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr")  { ?>

            <div class="col-md-12 my-1">
              <div class="d-flex">
                <a style="height:40px;width: 100px;" class="btn btn-primary mx-1  text-light col-md-1" href="../phpqrcode/qrgenerate.php"><span style="font-size: 8px;"><b>Generate All Qr</b></span></a>
                
                <a style="height:40px;width: 60px;" class="btn btn-warning mx-1  text-light col-md-1" href="export_excel.php"><span style="font-size: 8px;"><b>Export</b></span></a>
                <a style="height:40px;width: 60px;" class="btn btn-success mx-1 text-light col-md-1" href="file_import.php"><span style="font-size: 8px;"><b>Import</b></span></a>
                <a style="height:40px;width: 100px;" class="btn btn-info mx-1  text-light col-md-1" href="export_demo_excel.php"><span style="font-size: 8px;"><b>Export Demo File</b></span></a>
                
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
            <div class="col-md-6 mx-1 my-2">
              <h3 class="text-center text-light" style="font-size:20px;">All Employee List</h3>
            </div>




            <!-- add new employee form for only admin user  -->
            <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr"){ ?>

            
            <div class="col-md-2 mx-1 my-2">
              <a href="add_new_employee.php" class="btn btn-primary" style="font-size:8px;">Add New Employee</a>
            </div>

            <?php
            }
            ?>
             <div class="col-md-2 mx-1 my-2">
              <a href="mobile_table.php" class="btn btn-info" style="font-size:8px;"><i class="fa fa-refresh mx-1"></i>Refresh List</a>
             </div>
            
          </div>
          <div class="row col-md-12">
             <table class="table table-striped text-center" style="font-size:5px;" border="1">
            
                  <thead>
                    <tr>




                       <!-- filter form  for filter the employee list by company anme and department name  -->
                      <form method="post">
                     
                      <th colspan="3" scope="col">
                         <div class="my-1">


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
                       <th colspan="3" scope="col">
                        
                        <div class="my-1">



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
                    
                      
                      <th colspan="1" scope="col">
                        <div class="my-1 ">
                          
                          <input type="submit" class="form-control btn btn-primary" id="submit" name="filter_submit" aria-describedby="emailHelp" value="Filter">
                          
                        </div>
                        
                      </th>
                    </form>
                      
                    </tr>
                    <tr>
                      <td scope="col"><b>#</b></td>
                      <td scope="col"><b>Employee Name</b></td>
                        
                      <td scope="col"><b>Print</b></td>
                     <td scope="col"><b>Options</b></td>
                      <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>
                           <td scope="col"><b>Reports</b></td>
                      <?php }?>
                    
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
                    
                      
                    

                      <td>



                        <!-- if the printed value of user is o the show print on btn or show print again -->

                        <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr") { ?>

                                <?php if($row['printed']=="0") { ?>

                                       <a class="btn btn-primary" style="font-size:6px;" href="select_card.php?id=<?php echo $row['id'];?>">Print</a>
                              <?php }else{ ?>
                                        <a class="btn btn-primary" style="font-size:6px;" href="print_application.php?id=<?php echo $row['id'];?>">Print Again</a>
                              <?php }


                        }else{ ?>
                              <?php if($row['printed']=="0") { ?>

                                       <p class="btn btn-primary" style="font-size:6px;">Print</p>
                              <?php }else{ ?>
                                        <p class="btn btn-primary" style="font-size:6px;">Print Again</p>
                              <?php } 

                         }?>   

                        
                      </td>


                     

                      

                      <td>


                        <!-- button for going details view  -->

                         <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>
                        <div class="d-flex">
                          
                          
                          <a class="btn btn-info" style="font-size:6px;" href="profile_template.php?id=<?php echo $row['id'];?>">Details</a>

                          
                          
                        </div>
                       <?php }?>

                      </td>
                      


                        <!-- button for going details view  -->


                        
                     <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="superadmin") { ?>
                      <td>
                            <div class="d-flex">
                          
                               <a class="btn btn-warning" style="font-size:6px;" href="report.php?id=<?php echo $row['id'];?>">Reports</a>
                             </div>
                       </td>
                      <?php }?>

                          
                          
                        
                     
                       

                     

                     

                       <!-- for show image and qr code  -->



                      <td><img src="../operation/image/img/<?php echo $row['image']; ?>" style="width: 30px;height: 40px;"></td>
                      <td><img src="../phpqrcode/temp/qr/<?php echo $row['qr']; ?>" style="width: 30px;height: 40px;"></td>
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
          <div class="row col-md-12 my-3" style="font-size:8px;">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="mobile_table.php?page=<?php echo 1;?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <?php for ($p=1; $p<=$per_page ; $p++) { ?>
                  
                       <li class="page-item"><a class="page-link" href="mobile_table.php?page=<?php echo $p; ?>"><?php echo $p;  ?></a></li>
                <?php

                 }
                ?>
                  <li class="page-item">
                    <a class="page-link" href="mobile_table.php?page=<?php echo $per_page; ?>" aria-label="Next">
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
                    <a class="page-link" href="mobile_table.php?page=<?php echo 1;?>" aria-label="Previous">
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
                    <a class="page-link" href="mobile_table.php?page=<?php echo $per_page; ?>" aria-label="Next">
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



