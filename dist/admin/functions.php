<?php 

function confirm($result) {

  global $connection;

  if (!$result) {

    die("Query error <br/>" . mysqli_error($connection));

  }

}

function add_case() {
  global $connection;

  if (isset($_POST['create_case'])) {
    $case_name = $_POST['case_name'];
    $case_client = $_POST['case_client'];
    $case_description = $_POST['case_description'];
    $case_link = $_POST['case_link'];

    $case_image_one = $_FILES['case_image_one']['name'];
    $case_image_one_temp = $_FILES['case_image_one']['tmp_name'];
		
		$case_image_two = $_FILES['case_image_two']['name'];
    $case_image_two_temp = $_FILES['case_image_two']['tmp_name'];
		
		$case_image_three = $_FILES['case_image_three']['name'];
    $case_image_three_temp = $_FILES['case_image_three']['tmp_name'];
		
		$case_image_four = $_FILES['case_image_four']['name'];
    $case_image_four_temp = $_FILES['case_image_four']['tmp_name'];


    move_uploaded_file($case_image_one_temp, "../images/$case_image_one" );
		move_uploaded_file($case_image_two_temp, "../images/$case_image_two_temp" );
		move_uploaded_file($case_image_three_temp, "../images/$case_image_three_temp" );
		move_uploaded_file($case_image_four_temp, "../images/$case_image_four_temp" );
		


    $query = 
      "INSERT INTO case_studies(case_name, case_client, case_description, case_link , case_image_one, case_image_two, case_image_three, case_image_four) ";
    $query .= 
      "VALUES('{$case_name}','{$case_client}','{$case_description}','{$case_link}','{$case_image_one}','{$case_image_two}', '{$case_image_three}','{$case_image_four}' ) ";

    $create_case_query = mysqli_query($connection, $query);

    confirm($create_case_query);
		header("Location: case_studies.php?source=view_all_cases");
  }
}

function add_user() {
  global $connection;

  if (isset($_POST['create_user'])) {
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];

    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];

    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];


    move_uploaded_file($user_image_temp, "../images/$user_image" );


    $query = 
      "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_image, user_email, user_role) ";
    $query .= 
      "VALUES('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_image}','{$user_email}', '{$user_role}' ) ";

    $create_user_query = mysqli_query($connection, $query);

    confirm($create_user_query);
    header("Location: users.php?source=view_all_users");
  }
}


//Add category query
function insert_categories() {

  global $connection;

  if(isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];
    if ($cat_title == "" || empty($cat_title)) {
      echo "<h1>This field should not be empty</h1>";
    } else {
      $query = "INSERT INTO categories(cat_title) ";
      $query .= "VALUE('{$cat_title}') ";

      $create_category_query = mysqli_query($connection, $query);

      if (!$create_category_query ) {
        die('QUERY FAILED' . mysqli_error($connection));
      }
    }

  }
}

function find_categories() {

  global $connection;

  $query = "SELECT * FROM categories";
  $select_categories = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id']; 
    $cat_title = $row['cat_title']; 
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}''>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}''>Edit</a></td>";
    echo "</tr>";
  }
}


function find_cases() {
  global $connection;

  $query = "SELECT * FROM case_studies";
  $select_cases = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_cases)) {

    $case_id = $row['case_id']; 
    $case_name = $row['case_name']; 
    $case_client = $row['case_client']; 
    $case_description = $row['case_description']; 
    $case_link = $row['case_link'];
    $case_image_one = $row['case_image_one']; 
		$case_image_two = $row['case_image_two']; 
		$case_image_three = $row['case_image_three']; 
		$case_image_four = $row['case_image_four'];   

    echo "<tr>";
    echo "<td>{$case_id}</td>";
    echo "<td>{$case_name}</td>";
    echo "<td>{$case_client}</td>";
    echo "<td>{$case_description}</td>";
		echo "<td>{$case_link}</td>";
    echo "<td><img width='100px' src='../img/$case_image_one' alt='image'></td>";
		echo "<td><img width='100px' src='../img/$case_image_two' alt='image'></td>";
		echo "<td><img width='100px' src='../img/$case_image_three' alt='image'></td>";
		echo "<td><img width='100px' src='../img/$case_image_four' alt='image'></td>";
    echo "<td><a href='case_studies.php?delete={$case_id}'>Delete</a></td>";
    echo "<td><a href='case_studies.php?source=edit_case&c_id={$case_id}'>Edit</a></td>";
    echo "</tr>";  

  }

  if(isset($_GET['delete'])) {
    $the_case_id = $_GET['delete'];
    $query = "DELETE FROM case_studies WHERE case_id = {$the_case_id} ";

    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
    header("Location: case_studies.php?source=view_all_cases");
  }
}


//Find all Users
function find_users() {
  global $connection;

  $query = "SELECT * FROM users";
  $select_users = mysqli_query($connection, $query);
  confirm($select_users);
  while($row = mysqli_fetch_assoc($select_users)) {

    $user_id = $row['user_id']; 
    $username = $row['username']; 
    $user_password = $row['user_password']; 
    $user_firstname = $row['user_firstname']; 
    $user_lastname = $row['user_lastname'];
    $user_image = $row['user_image']; 
    $user_email = $row['user_email']; 
    $user_role = $row['user_role']; 

    echo "<tr>";
    echo "<td>{$user_id}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$user_password}</td>";
    echo "<td>{$user_firstname}</td>";
    echo "<td>{$user_lastname}</td>";
    echo "<td><img width='100px' src='../images/$user_image' alt='image'></td>";
    echo "<td>{$user_email}</td>";
    echo "<td>{$user_role}</td>";
    echo "<td><a href='users.php?source=edit_user&u_id={$user_id}'>Edit</td>";
    echo "<td><a href='users.php?source=view_all_users&delete={$user_id}'>Delete</td>";
    echo "</tr>";  

  }

  if(isset($_GET['delete'])) {
    $comment_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$user_id} ";

    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
    header("Location: users.php?source=view_all_users");
  }

}

function set_approval() {
  global $connection;
  if(isset($_GET['approved'])) {
    $approval = $_GET['approved'];
    $comment_id = $_GET['c_id'];
    if ($approval == 1) {
      $approval = "Approved";
      $query = "UPDATE comments SET comment_status = '$approval' WHERE comment_id = $comment_id";
      $status_query = mysqli_query($connection, $query);
      confirm($status_query);
    } else if ($approval == 0) {
      $disapproval = "Unapproved";
      $query = "UPDATE comments SET comment_status = '$disapproval' WHERE comment_id = $comment_id";
      $status_query = mysqli_query($connection, $query);
      confirm($status_query);
    }

    header("Location: comments.php?source=view_all_comments");
  }
}

//Edit posts

function edit_post() {

  global $connection;
  if (isset($_GET['p_id'])) {
    $post_id = $_GET['p_id'];
  }

  $query = "SELECT * FROM posts";
  $select_posts_by_id = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_posts_by_id)) {

    $post_id = $row['post_id']; 
    $post_cat_id = $row['post_category_id']; 
    $post_title = $row['post_title']; 
    $post_author = $row['post_author']; 
    $post_status = $row['post_status'];
    $post_image = $row['post_image']; 
    $post_tags = $row['post_title'];   
    $post_comment_count = $row['post_comment_count']; 
    $post_date = $row['post_date'];   
    $post_content = $row['post_content'];   

  }

}





function delete_categories() {

  global $connection;

  if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";

    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
    header("Location: categories.php");
  }

}




?>