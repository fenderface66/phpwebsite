<!--Edit Post-->
<?php 

global $connection;
if (isset($_GET['c_id'])) {
	$case_id = $_GET['c_id'];
}

$query = "SELECT * FROM case_studies WHERE case_id = {$case_id}";
$select_cases_by_id = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_cases_by_id)) {

	$case_id = $row['case_id']; 
	$case_name = $row['case_name']; 
	$case_client = $row['case_client']; 
	
	$case_blurb = $row['case_blurb'];
	
	$case_description = $row['case_description']; 
	
	$case_link = $row['case_link'];
	$case_image_one = $row['case_image_one']; 
	$case_image_two = $row['case_image_two']; 
	$case_image_three = $row['case_image_three']; 
	$case_image_four = $row['case_image_four']; 
	$case_image_five = $row['case_image_five']; 
	$case_image_six = $row['case_image_six']; 

 
}

if (isset($_POST['edit_case'])) {
	$case_name = $_POST['case_name'];
	$case_client = $_POST['case_client'];
	
	$case_blurb = $_POST['case_blurb'];
	$case_blurb = mysqli_real_escape_string($connection, $case_blurb);
	
	$case_description = $_POST['case_description'];
	$case_description = mysqli_real_escape_string($connection, $case_description);
	
	$case_link = $_POST['case_link'];

	$case_image_one = $_FILES['case_image_one']['name'];
	$case_image_one_temp = $_FILES['case_image_one']['tmp_name'];

	$case_image_two = $_FILES['case_image_two']['name'];
	$case_image_two_temp = $_FILES['case_image_two']['tmp_name'];

	$case_image_three = $_FILES['case_image_three']['name'];
	$case_image_three_temp = $_FILES['case_image_three']['tmp_name'];

	$case_image_four = $_FILES['case_image_four']['name'];
	$case_image_four_temp = $_FILES['case_image_four']['tmp_name'];

	$case_image_five = $_FILES['case_image_five']['name'];
	$case_image_five_temp = $_FILES['case_image_five']['tmp_name'];

	$case_image_six = $_FILES['case_image_six']['name'];
	$case_image_six_temp = $_FILES['case_image_six']['tmp_name'];

	move_uploaded_file($case_image_one_temp, "../img/$case_image_one" );
	move_uploaded_file($case_image_two_temp, "../img/$case_image_two" );
	move_uploaded_file($case_image_three_temp, "../img/$case_image_three" );
	move_uploaded_file($case_image_four_temp, "../img/$case_image_four" );
	move_uploaded_file($case_image_five_temp, "../img/$case_image_five" );
	move_uploaded_file($case_image_six_temp, "../img/$case_image_six" );

	if (empty($case_image_one)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) {
			$case_image_one = $row['case_image_one'];   
		}
	} 

	if (empty($case_image_two)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) { 
			$case_image_two = $row['case_image_two']; 
		}
	} 

	if (empty($case_image_three)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) {
			$case_image_three = $row['case_image_three'];  
		}
	} 

	if (empty($case_image_four)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) {
			$case_image_four = $row['case_image_four'];    
		}
 

	} 

	if (empty($case_image_five)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) {
			$case_image_five = $row['case_image_five'];    
		}
	} 

	if (empty($case_image_six)) {
		$query = "SELECT * FROM case_studies WHERE case_id = $case_id ";
		$select_image = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($select_image)) {
			$case_image_six = $row['case_image_six'];    
		}


	} 



	$query = "UPDATE case_studies SET ";
	$query .= "case_name = '{$case_name}', ";
	$query .= "case_client = '{$case_client}', " ;
	$query .= "case_blurb = '{$case_blurb}', " ;
	$query .= "case_link = '{$case_link}', ";
	$query .= "case_description = '{$case_description}', ";
	$query .= "case_image_one = '{$case_image_one}', ";
	$query .= "case_image_two = '{$case_image_two}', ";
	$query .= "case_image_three = '{$case_image_three}', ";
	$query .= "case_image_four = '{$case_image_four}', ";
	$query .= "case_image_five = '{$case_image_five}', ";
	$query .= "case_image_six = '{$case_image_six}' ";
	$query .= "WHERE case_id = {$case_id} ";
	echo $query;
	$edit_case_query = mysqli_query($connection, $query);
	confirm($edit_case_query);
	
	header("Location: ./case_studies.php?source=view_all_cases");
} 

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="case_name">Case Name</label>
		<input value="<?php echo $case_name; ?>" name="case_name" class="form-control" type="text">
	</div>
	<div class="form-group">
		<label for="case_client">Case Client</label>
		<input value="<?php echo $case_client; ?>" name="case_client" class="form-control" type="text">
	</div>
	<div class="form-group">
		<label for="case_blurb">Case Blurb</label>
		<textarea name="case_blurb" rows="10" class="form-control" type="text">
			<?php echo $case_blurb; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label for="case_description">Case Description</label>
		<textarea name="case_description" rows="10" class="form-control" type="text">
			<?php echo $case_description; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label for="case_link">Case Link</label>
		<input value="<?php echo $case_link; ?>" name="case_link" class="form-control" type="text">
	</div>

	<div class="form-group">
		<label for="case_image_one">Background Image</label>
		<img width="100" src="../img/<?php echo $case_image_one ?>"/> 
		<input name="case_image_one" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_two">Gallery 1</label>
		<img width="100" src="../img/<?php echo $case_image_two ?>"/> 
		<input name="case_image_two" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_three">Gallery 2</label>
		<img width="100" src="../img/<?php echo $case_image_three ?>"/> 
		<input name="case_image_three" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_four">Gallery 3</label>
		<img width="100" src="../img/<?php echo $case_image_four ?>"/> 
		<input name="case_image_four" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_five">Gallery 4</label>
		<img width="100" src="../img/<?php echo $case_image_five ?>"/> 
		<input name="case_image_five" class="form-control" type="file">
	</div>
	
	<div class="form-group">
		<label for="case_image_six">Gallery </label>
		<img width="100" src="../img/<?php echo $case_image_six ?>"/> 
		<input name="case_image_six" class="form-control" type="file">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="edit_case" value="Edit Case">
	</div>
</form>
