
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
             .form-check{
                text-align: left;
                align-items: flex-start;
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
    <section class="ftco-section">
        <div class="container bg-info justify-content-center my-5 border border-5 border-dark  col-md-4" style="border-radius: 60px;" id="box">
             <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="login-wrap p-4 p-md-5">

                        <!-- to show success massage  -->

                            <?php if(isset($_SESSION['msg'])){ ?>

                                    <div class="row col-md-12 bg-danger my-1 py-1">

                                      <h5 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h5>
                                    </div>


                               <?php  unset($_SESSION['msg']);}?>

                               <!-- to show error massage  -->

                               
                                <?php if(isset($_SESSION['msg2'])){ ?>

                                    <div class="row col-md-12 bg-success my-1 py-1">

                                      <h5 class="text-light text-center"><?php echo $_SESSION['msg2']; ?></h5>
                                    </div>


                               <?php  unset($_SESSION['msg2']);}?>

                        


                            

                        <div class="icon d-flex align-items-center justify-content-center my-1 ">
                            <span class="border-3 border border-dark rounded-3">
                                <img src="asset/image/sanmarglogo.jpg" style="width:150px;height:150px;" >
                            </span>
                        </div>
                        <div class="icon d-flex align-items-center justify-content-center my-1 ">
                            <span class="">
                                <img src="asset/image/sanmargnamenew.png" style="width:200px;height:80px;" >
                            </span>
                        </div>
                        <h3 class="text-center mb-4">Sign In</h3>
                        <form action="operation/login_operation.php" method="post" class="login-form">
                            <div class="form-group my-4">
                                <input type="email" name="email" id="email" class="form-control rounded-left" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group d-flex my-4">
                                <input type="password" class="form-control rounded-left" placeholder="Enter Password" name="password" id="password"  
                                    >
                            </div>
                           
                            <div class="from-group my-4 ">
                              <div class="mb-2 col-md-12">
                                    
                                    <select class="form-select" aria-label="Default select example" id="emp_type" name="emp_type" required>
                                      <option selected value="">Select Employee Type</option>
                                      <option value="admin">Admin</option>
                                      <option value="user">User</option>
                                      <option value="hr">Hr</option>
                                      <option value="superadmin">Superadmin</option>
                                      
                                    </select>
                                </div>
                            </div>
                   
                           
                            <div class="form-group my-2">
                                <button type="submit" name="submit" 
                                    class="form-control btn btn-success rounded submit px-3 border-3 border-white">Login</button>
                            </div>
                        </form>
                         <div class="from-group mb-1 text-center text-light">
                                    <h6 class="text-center text-light">New User: <a href="registration.php" class="text-center text-light">Register Now</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>