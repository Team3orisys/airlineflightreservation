<!DOCTYPE html>
<html>
<head>
	<title>VIEW DETAILS</title>
</head>
<body>
	<form>
		
	<table>
			<tr>
				<th>FIRST NAME</th><th>SECOND NAME</th><th>ADDRESS</th><th>DISTRICT</th><th>FROM</th><th>TO</th><th>DATE</th><th>TIME</th>
			</tr>
			<?php
				if($n->num_rows()>0)
				{
					foreach($n->result() as $row)
					{
				?>
			<tr>
				<td><?php echo $row->fname; ?></td>
				<td><?php echo $row->lname; ?></td>
				<td><?php echo $row->address; ?></td>
				<td><?php echo $row->district; ?></td>
				<td><?php echo $row->from; ?></td>
				<td><?php echo $row->to; ?></td>
				<td><?php echo $row->date; ?></td>
				<td><?php echo $row->time; ?></td>
				
				
			</tr>
		</table>
	</form>
</body>
</html>
