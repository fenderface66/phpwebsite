@@include('./header.php')
<div class="portfolio">

	<div class="portfolio-wrapper">
		<div class="portfolio-title-container">
			<h1>Portfolio</h1>
			<p>Take a look at some of the work i've done.</p>
		</div>

		<div class="stack-container">

			<div class="portfolio_container span_12_of_12">

				<?php 

				$query = "SELECT * FROM case_studies";
				$case_query = mysqli_query($connection, $query);

				$numResults = mysqli_num_rows($case_query);
				$counter = 0;
				if (!$case_query) {
					die("Error" . mysqli_error($connection));
				}
				while ($row = mysqli_fetch_assoc($case_query)) {

					$case_id = $row['case_id']; 
					$case_name = $row['case_name']; 
					$case_client = $row['case_client']; 
					$case_description = $row['case_description']; 
					$case_link = $row['case_link']; 
					$case_image_one = $row['case_image_one']; 
					$case_position = null;	
					$case_color = null;
						if ($counter % 3 == 0) {
						$case_position = 'new-row';	
						$counter = 0;
					} 

					switch($counter) {
						case 0;
							$case_color = 'blue-top';
							break;

						case 1;
							$case_color = 'yellow-top';
							break;

						case 2;
							$case_color = 'orange-top';
							break;

						default: 


							break;	

					}
					
					$counter++;
				?>
				<div class="col span_4_of_12   card-container <?php echo $case_client; ?> index-<?php echo $case_id; ?> <?php echo $case_position ?>">
				<a href="casestudy.php?c_id=<?php echo $case_id ?>">
					<div class="card <?php echo $case_color; ?> <?php echo $case_client; ?>-card front">
						<img src="img/<?php echo $case_image_one ?>" alt="">
						<div class="overlay"></div>
						<div class="info-container">
							<h3><?php echo $case_name ?></h3>
							<p><?php echo $case_description ?></p>

						</div>
					</div>
				</a>	
				</div>
				<?php 
				}

				?>
			</div>
		</div>

	</div>

	@@include('./footer.php')
