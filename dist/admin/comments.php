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
  case 'add_post';
    include "includes/add_post.php";
    break;

  case 'view_all_comments';
    include "includes/view_all_comments.php";
    break;
    

  case '';
    include "includes/view_all_comments.php";
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
