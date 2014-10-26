<section>
	<div class="container">
		<div class="row">

			<div id="signup_form">

				<?php echo form_open('login/create_member');?>
					<div class="form-group">
						<label for="username">Username : </label>
						<?php echo form_input('username', set_value('username','Username');?>
					</div>

					<div class="form-group">
						<label for="password">Password : </label>
						<?php echo form_password('password', '','placeholder="Password" class="password"');?>
					</div>

					<div class="form-group">
						<label for="password_confirm">Confirm Password : </label>
						<?php echo form_password('password_confirm', '' ,'placeholder="Password" class="password_confirm"');?>
					</div>

					<p><?php echo form_submit('submit', 'class="btn btn-default btn-success"', 'Create Account');?></p>

				<?php echo form_close();?>

				<?php echo validation_errors();?>

			</div>

		</div>
	</div>
</section>