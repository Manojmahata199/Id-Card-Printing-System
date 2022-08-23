
    </div>
  

    <!-- for show footer  -->
    
    <div class="row bg-secondary" id="footer">



        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center my-1 border-top">
            <p class="col-md-4 mb-0 text-light">&copy;2021 Company, Inc</p>

            <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
             <!--  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg> -->
             <img src="../asset/image/sanmarglogo.jpg" width="80" height="80">
            </a>

            <ul class="nav col-md-4 justify-content-end">
              <li class="nav-item"><a href="dashboard.php" class="nav-link px-2 text-light">Home</a></li>
              <li class="nav-item"><a href="holiday_list.php" class="nav-link px-2 text-light">Holidays</a></li>
              <li class="nav-item"><a href="rules_regulation.php" class="nav-link px-2 text-light">Rules & Regulations</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link px-2 text-light">About</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Settings</a></li>
            </ul>
          </footer>
        </div>

        <div class="b-example-divider"></div>

        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
             <img src="../asset/image/sanmarglogo.jpg" width="80" height="80">
              <span class="text-light">&copy; 2021 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="text-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </footer>
    </div>

    <div class="b-example-divider"></div>




</main>
<script src="../asset/js/jquery-3.6.0.min.js"  type="text/javascript"></script>
<script src="../asset/js/bootstrap.min.js"  type="text/javascript" ></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
            
</script>


  



<script type="text/javascript">
  

$(document).ready(function(){
  // $(".side-item").slideUp();
  // $('#leftsidebar').css("width","0px");

    


  
    
    $('#dropdown').click(function(){
     $('#dropdown-menu').slideToggle();    

    });
    $('#close-sidebar').click(function(){
     
     
      
      
      $(".side-item").slideUp();
      $('#leftsidebar').css("width","0px");
      
       
     

    });

    $("#menu-btn").click(function(){
      //alert("this is alert");
       $(".side-item").slideDown();
      $('#leftsidebar').css("width","300px");
      
    });

    $('#save').click(function(){
      

      var id=$('#card_id').val();
      var mt_img=$('#mt_img').val();
      var ml_img=$('#ml_img').val();
      var mt_name=$('#mt_name').val();
      var text_color=$('#text_color').val();
      var mt_qr=$('#mt_qr').val();
      var ml_qr=$('#ml_qr').val();
      var mt_info=$('#mt_info').val();
      var ml_info=$('#ml_info').val();
      var card_type=$('#card_type').val();
      var save="save";
      //alert("this is id"+id+"mtimg"+mt_img+"mlimg"+ml_img+"mtnamr"+mt_name+"text_color"+text_color+"mtqr"+mt_qr+"mlqr"+ml_qr+"mtinfo"+mt_info+"mlinfo"+ml_info+"cardtype"+card_type+"");

      $.ajax({
        type: "POST",
        url: "set_new_card_design_operation.php",
        data: {

          id: id,
          mt_img:mt_img,
          ml_img:ml_img,
          mt_name:mt_name,
          text_color:text_color,
          mt_qr:mt_qr,
          ml_qr:ml_qr,
          mt_info:mt_info,
          ml_info:ml_info,
          card_type:card_type,
          save:save
        },
        success: function(result) {
          alert("Design Saved Successfully");
        }
    });










    });
    
});










</script>







</body>
</html>
