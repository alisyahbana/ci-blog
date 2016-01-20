<div class="container">  
<div class="panel panel-default" id="login-form">
<div class="panel-heading">
<?php 
echo heading('Please, Login', 3);
?>
</div>
<div class="panel-body">
	<div id="login_form">
		<?php echo form_open('auth/validate_credentials', 'class="form-signin"'); 
		echo form_input('username', '', 'placeholder="Username", class="form-control", required autofocus ');
		echo form_password('password', '', 'placeholder="Password" class="form-control", required');
		echo form_submit('submit', 'Login', 'class="btn btn-lg btn-primary btn-block"');
		echo anchor('auth/register', 'Create Account', 'class="btn btn-lg btn-primary btn-block"');
		echo form_close();
		?>
	</div>
</div>
</div>
</div>


