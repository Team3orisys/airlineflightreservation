<!DOCTYPE html>
<html>
<head>
	<title>Discont </title>
</head>
<body>
<form action="<?php echo base_url() ?>main/discount_action" method="post">
	Flight:
	<select name="flight">
		<?php 
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
					{
			?>
                
				<option value="<?php echo $row->id;?>"><?php echo $row->airlinename?>
					
				</option>
			
			<?php
				}
			}
			?>
	</select>

	discount:<input type="text" name="discount">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>