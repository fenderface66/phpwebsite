<?php include "includes/admin_header.php" ?>


<div id="wrapper">

  <?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to Admin
            <small>Author Name</small>
          </h1>
          <?php 

  if (isset($_GET['source'])) {
    $source = $_GET['source'];
  } else {

    $source = '';

  }


switch($source) {
  case 'add_case';
    include "includes/add_case.php";
    break;

  case 'view_all_cases';
    include "includes/view_all_cases.php";
    break;
    
  case 'edit_case';
    include "includes/edit_case.php";
    break;  

  case '';
    include "includes/view_all_cases.php";
    break;

  default: 
    break;


}



          ?>


        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<?php include "includes/admin_footer.php"?>
