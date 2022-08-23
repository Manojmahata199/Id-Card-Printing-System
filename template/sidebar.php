   <!-- this is sidebar -->

    <div class="d-flex" id="flex-div" style="z-index: -1;" >
  

      <div class="d-flex flex-column flex-shrink-0  text-white bg-dark sidebar col-md-3 side-item" id="leftsidebar" style="width: 300px; height:830px;padding: 0px;">
        <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none side-item">
          <svg class="bi me-2 side-item bg-light text-light" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4 side-item">MENU BAR ITEM</span>
        </a>
        <hr class="side-item">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="float-right side-item my-1">
              <button class="btn btn-close text-light bg-light" id="close-sidebar" style="margin-left: 230px; border: 2px solid white; font-size: 25px;"></button>
              
            </li>
          <li class="nav-item side-item">
            <a href="dashboard.php" class="nav-link text-white side-item <?php echo $active_link_dashboard; ?>"aria-current="page">
              <svg class="bi me-2 text-white bg-light" width="16" height="16"><use xlink:href="#home"/></svg>
              HOME PAGE
            </a>
          </li>
           <?php if($_SESSION['emp_type']=="user" || $_SESSION['emp_type']=="superadmin"){ ?>
          <li class="nav-item side-item">
            <a href="profile_template.php?id=<?php echo $_SESSION['id']; ?>" class="nav-link text-white side-item <?php echo $active_link_profile; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              PROFILE VIEW
            </a>
          </li>
          <?php
          }
          ?>
           <?php if($_SESSION['emp_type']=="admin"  || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){ ?>
          <li class="nav-item side-item">
            <a href="main.php" class="nav-link text-white side-item <?php echo $active_link_main; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#table"/></svg>
              EMPLOYEE LIST
            </a>
          </li>
          <?php
          }
          ?>
          <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr"){ ?>

          <li class="nav-item side-item">

            <a href="add_new_employee.php" class="nav-link text-white side-item <?php echo $active_link_add_employee; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#chevron-right"/></svg>
              ADD EMPLOYEE
            </a>
          </li>
          <?php
          }
          ?>
           <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr"){ ?>

           <li class="nav-item side-item">
            <a href="manage_department.php" class="nav-link text-white side-item <?php echo $active_link_manage_department; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#grid"/></svg>
              MANAGE DEPARTMENT
            </a>
          </li>
          <?php
          }
          ?>
           <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr"){ ?>

          <li class="nav-item side-item">
            <a href="manage_designation.php" class="nav-link text-white side-item <?php echo $active_link_manage_designation; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#gear-fill"/></svg>
              MANAGE DESIGNATION
            </a>
          </li>
          <?php
          }
          ?>
           <?php if($_SESSION['emp_type']=="admin"  || $_SESSION['emp_type']=="hr"){ ?>

          <li class="nav-item side-item">
            <a href="manage_company.php" class="nav-link text-white side-item <?php echo $active_link_manage_company; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#geo-fill"/></svg>
              MANAGE COMPANY
            </a>
          </li>
          <?php
          }
          ?>
           <?php if($_SESSION['emp_type']=="admin"){ ?>

          <li class="nav-item side-item">
            <a href="manage_card.php" class="nav-link text-white side-item <?php echo $active_link_manage_card; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              MANAGE CARD
            </a>
          </li>
          <?php
          }
          ?>

           <?php if($_SESSION['emp_type']=="admin"  || $_SESSION['emp_type']=="superadmin" || $_SESSION['emp_type']=="hr"){ ?>

          <li class="nav-item side-item">
            <a href="print_application_list.php" class="nav-link text-white side-item <?php echo $print_application; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#collection"/></svg>
             PRINT APPLICATION LIST
            </a>
          </li>
          <?php
          }
          ?>

          <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="user"){ ?> 

          <li class="nav-item side-item">
            <a href="holiday_list.php" class="nav-link text-white side-item <?php echo $active_link_holiday_list; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#calendar3"/></svg>
              HOLIDAY LIST
            </a>
          </li>
          <?php
          }
          ?>
        
         
         <?php if($_SESSION['emp_type']=="admin" || $_SESSION['emp_type']=="hr" || $_SESSION['emp_type']=="user"){ ?> 
          
          <li class="nav-item side-item">
            <a href="leave_application_form.php" class="nav-link text-white side-item <?php echo $active_link_leave_application; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#chat-quote-fill"/></svg>
              LEAVE APPLICATION
            </a>
          </li>
          <?php
          }
          ?>


          <li class="nav-item side-item">
            <a href="leave_application_list.php" class="nav-link text-white side-item <?php echo $active_link_application_list; ?>">
              <svg class="bi me-2 bg-light" width="16" height="16"><use xlink:href="#collection"/></svg>
              LEAVE APPLICATION LIST
            </a>
          </li>
        </ul>
        <hr class="side-item">
        <div class="mx-4 border border-white border-2 rounded-3 side-item">
         
               
                <p class="mx-3 side-item">
                  <i class="fa fa-calendar mx-2 fs-3"></i>Today: <b><?php echo $day; ?></b>
                </p>
                <p class="mx-3 side-item d-flex">
                  <i class="fa fa-clock-o mx-2 fs-3"></i>
                  <span>Date: <b><?php echo $date; ?></b></span>
                </p>
              
        </div>
        <hr class="side-item">
        
        <div class="dropdown side-item my-3">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle side-item" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../operation/image/img/<?php echo $_SESSION['image'];?>" alt="" width="32" height="32" class="rounded-circle me-2">

           <b><?php echo $_SESSION['name']; ?></b>
            
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Preview Card</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="profile_template.php?id=<?php echo $_SESSION['id']; ?>">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../operation/signout_operation.php">Sign out</a></li>
          </ul>
        </div>
        
      </div>

