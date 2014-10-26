<section>
	<div class="container">
		<div class="row">

			<div id="login_form">
				<?php if(isset($account_created)) { ?>
					<h2><?php echo $acount_created;?></h2>
				<?php } else ( ?>
					<h2>Please Login.</h2>
				<?php } ?>

				<?php echo form_open('login/validate_credentials');?>
					<div class="form-group">
						<label for="username">Username : </label>
						<?php echo form_input('username','Username');?>
					</div>

					<div class="form-group">
						<label for="password">Password : </label>
						<?php echo form_password('password','Password');?>
					</div>
					<label for="remember">Remember</label>
					<?php echo form_checkbox('remember', '1', TRUE, 'id="remember"');?>

					<p><?php echo form_submit('submit', 'class="btn btn-default btn-success"');?></p>

					<?php echo anchor('login/singup', 'Create Account');?>


				<?php echo form_close();?>

			</div>

		</div>
	</div>
</section>