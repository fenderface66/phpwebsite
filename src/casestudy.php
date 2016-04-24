
@@include('./header.php')

<div class="case-container span_12_of_12">



	<?php 

	if (isset($_GET['c_id'])) {
		$case_id = $_GET['c_id'];
	}

	$query = "SELECT * FROM case_studies WHERE case_id = $case_id";
	$case_query = mysqli_query($connection, $query);

	$numResults = mysqli_num_rows($case_query);
	$counter = 0;
	if (!$case_query) {
		die("Error" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_assoc($case_query)) {
		$case_name = $row['case_name']; 
		$case_client = $row['case_client']; 
		$case_description = $row['case_description']; 
		$case_link = $row['case_link']; 
		$case_image_one = $row['case_image_one']; 
		$case_image_two = $row['case_image_two']; 
		$case_image_three = $row['case_image_three']; 
		$case_image_four = $row['case_image_four']; 

	?>
	<div class="case">
		<div class="image-container col">
			<img src="img/<?php echo $case_image_two ?>" class="case-image" />
		</div>
		<div class="content-container col">
			<h1><?php echo $case_name ?></h1>
			<p><?php echo $case_description ?></p>
			
			<div class="parent-container">
				<a href="img/<?php echo $case_image_one ?>" class="image-link">
					<img src="img/<?php echo $case_image_one ?>" />
				</a>
				<a href="img/<?php echo $case_image_two ?>" class="image-link">
					<img src="img/<?php echo $case_image_two ?>" />
				</a>
			</div>
			<div class="cta-container">
				<a class="hvr-underline-from-center" href="<?php echo $case_link ?>">See for your self</a>
			</div>

		</div>

	</div>
	<?php 
	}

	?>



</div>


@@include('./footer.php')