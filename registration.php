<?php
session_start();

include "config/variable.php";
include "config/conn.php";

?>



<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Id Card Generator-sanmarg.in</title>
     <!-- add icon link -->
        <link rel = "icon" href ="asset/image/sanmarglogo.jpg" type = "image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.69oUKoK-5A.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <link rel="stylesheet" type="text/css" href="aseet/css/bootstrap.min.css">



     <style type="text/css">
        body{
              background-image: url('asset/image/login_background.jfif');
               background-repeat:no-repeat;
               background-size: cover;
            
               width: 100%;
               height: 100%;
                background-size: 2000px 1000px;
              z-index: -1;
              text-align:center;
              border-radius: 2%;
              margin-top: 0px;
              margin-left: 0.7px;
             }
            
             #box{
                 background-image: url('asset/image/box.jfif');
               background-repeat:no-repeat;
               background-size: cover;
            
               width: 100%;
               height: 100%;

             }
    </style>

</head>

   <body>
        <div class="container bg-info  my-5 border border-5 border-dark  col-md-10 text-light" style="border-radius: 60px;text-align: left;" id="box">
            <div class="row ">
                <div class="col-md-10 col-lg-12">
                    <div class="login-wrap p-4">
                        <?php if(isset($_SESSION['msg4'])){ ?>

                                    <div class="row col-md-12 bg-danger my-1 py-1">

                                      <h5 class="text-light text-center"><?php echo $_SESSION['msg4']; ?></h5>
                                    </div>


                               <?php  unset($_SESSION['msg4']);}?>

                               <!-- to show error massage  -->

                               
                                <?php if(isset($_SESSION['msg3'])){ ?>

                                    <div class="row col-md-12 bg-success my-1 py-1">

                                      <h5 class="text-light text-center"><?php echo $_SESSION['msg3']; ?></h5>
                                    </div>


                               <?php  unset($_SESSION['msg3']);}?>




                           <h3 class="text-center mb-4">Registration Form</h3>

                         <form action="operation/registration_operation.php" method="post" class="login-form" enctype="multipart/form-data">
                           <div class="mb-2 col-md-12">
                                  <label for="emp_name" class="form-label">Employee Name</label>
                                  <input type="text" class="form-control" id="emp_name" name="emp_name" aria-describedby="emailHelp" required>
                                  
                            </div>
                             <div class="d-flex">
                    
                               <div class="mb-2 col-md-4" style="margin-right: 2px;">
                                  <label for="emp_mobile" class="form-label">Mobile No</label>
                                  <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" required>
                                </div>
                                 <div class="mb-2 col-md-4" style="margin-right: 2px;">
                                  <label for="emp_emargency_mobile" class="form-label">Emargency No</label>
                                  <input type="text" class="form-control" id="emp_emargency_mobile" name="emp_emargency_mobile" required>
                                </div>

                                 <div class="mb-2 col-md-4" style="margin-right: 2px;">
                                  <label for="emp_email" class="form-label">Email Address</label>
                                  <input type="email" class="form-control" id="emp_email" name="emp_email" required>
                                </div>

                             </div>

                             <div class="mb-2 col-md-12">
                               <label for="emp_address" class="form-label">Employee Address</label>
                               <input type="text" class="form-control" id="emp_address" name="emp_address" required>
                              </div>
                              <div class="mb-2 col-md-12">
                                  <label for="emp_image" class="form-label">Profile Image</label>
                                  <input type="file" class="form-control" id="emp_image" name="emp_image" required>
                            </div>

                            <div class="d-flex">
                                  <div class="mb-2 col-md-6" style="margin-right: 2px;">
                                    <label for="date_of_birth" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                                  </div>


                        
                               
                               
                                
                                <div class="mb-2 col-md-6">
                                    <label for="emp_blood_group" class="form-label">Enter Blood Group</label>
                                    <select class="form-select" aria-label="Default select example" id="emp_blood_group" name="emp_blood_group" required>
                                      <option selected value="">Select Blood Group</option>
                                      <option value="A-">A-</option>
                                      <option value="B-">B-</option>
                                      <option value="A+">A+</option>
                                      <option value="B+">B+</option>
                                      <option value="O">O</option>
                                      <option value="AB+">AB+</option>
                                      <option value="AB-">AB-</option>
                                    </select>
                                  </div>
               
                            
                            </div>
                             <div class="mb-2 col-md-12">
                                  <label for="emp_password" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="emp_password" name="emp_password" required>
                             </div>
                             <p class="text-danger" id="pass_validation"></p>
                             <div class="mb-2 col-md-12">
                                  <label for="emp_cpassword" class="form-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="emp_cpassword" name="emp_cpassword" required>
                             </div>
                            <p class="text-danger" id="cpass_validation"></p>
                             <div class=" my-5 text-center">
                                <button type="submit" name="submit" id="submit" class="col-md-4  btn btn-success rounded submit px-3 border-3 border-white">Register</button>
                                    
                            </div>
                        </form>
                         <div class="from-group mb-1 text-center text-light">
                                    <h6 class="text-center text-light">Allready Register <a href="index.php" class="text-center text-light">Login Now</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

















     <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>






        <script type="text/javascript">
            

            $('#submit').click(function(){

                var pass=$('#emp_password').val();
                var cpass=$('#emp_cpassword').val();

                if(pass!=cpass){
                    alert("Password $ Confirm Password Is Not Same");
                    $('#pass_validation').html("Invalid Input!!!");
                    $('#cpass_validation').html("Invalid Input!!!");
                    return false;
                }
            })
        </script>

   </body>

</html>