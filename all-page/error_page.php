 <?php
   include "../config/variable.php";
    include "../config/conn.php";
    
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>error page</title>

  <style>
    
.container{
  align-items: center;
  text-align: center;
  padding: 30px 30px 30px 30px;
}
.back_button{
  background-color: gray;
  border: 2px solid black;
  border-radius: 10px;
  text-decoration: none;
  color: black;
  width: 100px;
  height: 20px;
  font-size: 20px;
}




  </style>
</head>
<body>


  <div>
    

    <div class="container">
      <h1><b>404</b></h1>
      <h3><b>UH OH! You're lost.</b></h3>
      <p><b>The page you are looking for does not exist. How you got here is a mystery. But you can click the button below to go back to the homepage.</b></p>
      <a class="back_button" href="<?php echo base_link;?>all-page/main.php"><b>Back To Home Page</b></a>
    </div>
  </div>

</body>
</html>