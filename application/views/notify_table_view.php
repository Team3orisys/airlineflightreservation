<!DOCTYPE html>
<html>
<head>
	<title>USER NOTIFICATION</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>


</head>	
	<style>
		table,th,td{
			border:2px solid;
			border-collapse: collapse;
		}
	</style>

</head>
<body>
	<table class=" table table-primary table-stripped table-hover table-bordered mt-5 text-center">
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