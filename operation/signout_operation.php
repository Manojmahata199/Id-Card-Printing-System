<?php
session_start();

  include "../config/conn.php";
    include "../config/variable.php";


   

  $_SESSION['msg']="Sign Out successfully";

  header('Location:../index.php');