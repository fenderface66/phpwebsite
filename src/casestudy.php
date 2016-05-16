
@@include('./header.php')
<div class="case-study-page">


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
		$case_image_five = $row['case_image_five']; 
		$case_image_six = $row['case_image_six']; 

	?>
	<div style="background-image: url('img/<?php echo $case_image_one ?>')" class="banner">
		<div class="overlay">

		</div>
		<div class="text-container">
			<h1><?php echo $case_name ?></h1>
		</div>
	</div>
	<div class="case-container span_12_of_12">
		<div class="case">
			<div class="content-container">

				<p><?php echo $case_description ?></p>

				<div class="parent-container">
					<a href="img/<?php echo $case_image_two ?>" class="image-link">
						<img src="img/<?php echo $case_image_two ?>" />
					</a>
					<a href="img/<?php echo $case_image_three ?>" class="image-link">
						<img src="img/<?php echo $case_image_three ?>" />
					</a>
					<a href="img/<?php echo $case_image_four ?>" class="image-link">
						<img src="img/<?php echo $case_image_four ?>" />
					</a>
					<a href="img/<?php echo $case_image_five ?>" class="image-link">
						<img src="img/<?php echo $case_image_five ?>" />
					</a>
					<a href="img/<?php echo $case_image_six ?>" class="image-link">
						<img src="img/<?php echo $case_image_six ?>" />
					</a>
				</div>
				<div class="cta-container">
					<a class="case-cta" href="<?php echo $case_link ?>">See for your self</a>
				</div>

			</div>

		</div>
		<?php 
	}

		?>



	</div>
</div>

@@include('./footer.php')