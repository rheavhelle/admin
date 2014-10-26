<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css">
</head>



<body>
	
	<div class="container">
	<div class="panel" style="text-align:center;">
	<h2>ADD SUB - Categories</h2>
	<form role="form" method="post">

	<p>
		<label for="cat_id">Categories : </label>
		<select name="cat_id" id="cat_id">

		<option value="">Please select</option>
		<?php
			if (isset($categories)) {
				foreach($categories as $ckey => $cval) {
					if($cval->isactive)
					{
					?>
					<option value="<?=$cval->cat_id?>" <?php if($cval->cat_id == set_value('cat_id')) {echo "selected";} ?> > <?=$cval->category;?> </option>
				<?php
					}
				}
			}
		?>
		</select>

	</p>
	
	<p>
		<label for="name">Subcategory: </label>
		<input type="text" name="name" id="name" />
	</p>

	<p>
		<input type="submit" value="submit" class="btn btn-info"/>
	</p>

	<?php echo form_close(); ?>
	</div>

</div>
</body>
</html>
