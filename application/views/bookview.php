<!DOCTYPE html>
<html>
<head>
	<title>VIEW DETAILS</title>
</head>
<body>
	<form>
		
	
			<?php
				if($n->num_rows()>0)
				{
					foreach($n->result() as $row)
					{
				?>
			
			<input type="hidden" name="id" value="<?php echo $row->id;?>">

			<label class=>Airline Name</label>
				<input type="text" name="airlinename" value="<?php echo $row->airlinename;?>">

			<label class=>Departure</label>
				<input type="text" name="departure" value="<?php echo $row->departure;?>">
			<label class=>Arrival</label>
				<input type="text" name="arrival" value="<?php echo $row->arrival; ?>">
			<label class=>Departure date</label>
				<input type="text" name="date" value="<?php echo $row->date;?>">
			
				
				<label>Business</label> <label name="bcost"><?php echo $row->bcost;?></label><a href="<?php echo base_url()?>main/bform/<?php echo $row->id;?>">Book</a>

				<label>Economy</label> <label name="bcost"><?php echo $row->ecost;?></label><a href="#">Book</a>

				<label>First</label> <label name="bcost"><?php echo $row->fcost;?></label><a href="#">Book</a>



		<?php
	}
}
?>
	</form>
</body>
</html>
