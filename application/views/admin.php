<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css">
</head>


<body>

<div class="container">
	<div class="panel" style="text-align:center;">
	<h2>ADD Categories</h2>
	<?php echo form_open('site/create');?>

	<p>
		<label for="category">Category: &nbsp</label>
		<input type="text" name="category" id="category" />
	</p>

	<p>
		<label for="description">Description: </label>
		<input type="text" name="description" id="description" />
	</p>

	<p>
		<input type="submit" value="submit" class="btn btn-info"/>
	</p>

	<?php echo form_close(); ?>
	</div>
<hr/>

<h2>READ</h2>
	<?php if(isset($records)) : foreach($records as $row) :?>

		<h2><?php echo anchor("site/delete/$row->cat_id", $row->category) ; ?></h2>
		<div><?php echo $row->description; ?></div>

	<?php endforeach; ?>

	<?php else : ?>

		<h2>No records were returned</h2>

	<?php endif ; ?>

<hr/>

	<h2>DELETE</h2>
<p>to delte click on the title</p>




</div>

</body>
</html>