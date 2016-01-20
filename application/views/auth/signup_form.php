<div id='register_form'>
	<div class='form-signin'>
	<?php
	echo form_open('auth/create_member');
	echo form_input('first_name', set_value('first_name', ''), 'placeholder="First Name", class="form-control", required ');
	echo form_input('last_name', set_value('last_name', ''), 'placeholder="Last Name", class="form-control", required ');
	echo form_input('email', set_value('email', ''), 'placeholder="E-mail", class="form-control", required ');
	echo form_input('username', set_value('username', ''), 'placeholder="Username", class="form-control", required ');
	echo form_password('password', '', 'placeholder="Password" , class="form-control", required ');
	echo form_password('password_confirm', '', 'placeholder="Confirm Password",   class="form-control" ');
	echo form_submit('submit', 'Create Account', 'class="btn btn-lg btn-primary btn-block"');

	echo validation_errors('<p class="error">');
	?>
</div>
</div>