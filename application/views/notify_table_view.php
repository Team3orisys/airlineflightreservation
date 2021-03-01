<!DOCTYPE html>
<html>
<head>
	<title>user notify view</title>
	
	<style>
		table,th,td{
			border:2px solid;
			border-collapse: collapse;
		}
	</style>

</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Airline</th>
				
				<th>Notification</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			if($n->num_rows()>0)
			{
					foreach($n->result() as $row)
					{
			?>
						<tr>
							<td><?php echo $row->airlinename;?></td>
							
							<td><?php echo $row->notification;?></td>
							
						</tr>
			<?php
				}
			}
			?>

		</tbody>

	</table>
	<a href="<?php echo base_url()?>main/passenger">Back</a>


</body>
</html>