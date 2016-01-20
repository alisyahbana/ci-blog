<?php

foreach($data_user as $user){

	$FirstName=$user->first_name;
	$LastName=$user->last_name;
	$Email=$user->email;
	$ProfilePicture=$user->profpict;
}

if (isset($ProfilePicture)){
	echo img("uploads/$ProfilePicture", TRUE, 'class="img-circle img-responsive center-block profilepicture"');
}
else{
	echo img('assets/images/profile.png', TRUE, 'class="img-circle img-responsive center-block profilepicture"');
}

?>

<div class="center-block">
<!-- Upload section -->
<?php 
if (isset($error)) {
echo $error;
}?>

<?php echo form_open_multipart('site/do_upload');?>
<p class="text-center">
<input type="file" name="userfile" size="20" />
</p>
<input type="submit" value="upload" />

</form>




</div>


<p class="text-center">
Hello
<strong>
<?php echo $username; 
echo br();
?>
</strong>
</p>


<div class="row">
<div class="col-xs-4">
FirstName
</div>
<div class="col-xs-4">
<?php echo $FirstName;?>
</div>
</div>

<div class="row">
<div class="col-xs-4">
LastName	
</div>
<div class="col-xs-4">
<?php echo $LastName;?>
</div>
</div>

<div class="row">
<div class="col-xs-4">
Email	
</div>
<div class="col-xs-4">
<?php echo $Email;?>
</div>
</div>


