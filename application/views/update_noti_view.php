<!DOCTYPE html>
<html>
<head>
	<title>updation Bus Notification</title>

	<style>
		
		fieldset{
			width:500px;
			height: 400px;
		}
	</style>
</head>
<body>

<form method="post" action="<?php echo base_url()?>main/admin_update">
	<?php 
	if(isset($user_data))
	{

		foreach ($user_data->result()as $row1) 
		{
		?>
	<center>
		
		<fieldset>
			<h1>Upadate Flight notification</h1>
			
			
			<textarea placeholder="Notification" name="noti"><?php echo $row1->notification;?></textarea><br><br>
			<input type="hidden" name="id" value="<?php echo $row1->n_id;?>">
			<input type="submit" name="update" value="Update">

		</fieldset>
	</center>
	<?php
	}
	}
	
	?>

</form>

</body>
</html>