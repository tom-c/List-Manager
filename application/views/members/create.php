<h2>Create a member</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('members/create') ?>

	<label for="name">Name</label> 
	<input type="input" name="name" /><br />

	<label for="email">Email</label>
	<input type="input" name="email" /><br />
	
	<input type="submit" name="submit" value="Create member" /> 

</form>
