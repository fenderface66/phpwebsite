

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="case_name">Case Name</label>
		<input name="case_name" class="form-control" type="text">
	</div>
	<div class="form-group">
		<label for="case_client">Case Client</label>
		<input name="case_client" class="form-control" type="text">
	</div>
	<div class="form-group">
		<label for="case_description">Case Description</label>
		<textarea name="case_description" rows="10" class="form-control" type="text"></textarea>
	</div>
	<div class="form-group">
		<label for="case_link">Case Link</label>
		<input name="case_link" class="form-control" type="text">
	</div>
	<div class="form-group">
		<label for="case_image_one">Background Image</label>
		<input name="case_image_one" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_two">Post Image two</label>
		<input name="case_image_two" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_Three">Post Image Three</label>
		<input name="case_image_Three" class="form-control" type="file">
	</div>
	<div class="form-group">
		<label for="case_image_Four">Post Image Four</label>
		<input name="case_image_Four" class="form-control" type="file">
	</div>
	
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_case" value="Publish Post">
	</div>
</form>


<!--Add Case-->
<?php add_case(); ?>

