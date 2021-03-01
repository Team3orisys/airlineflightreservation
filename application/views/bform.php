<!DOCTYPE html>
<html>
<head>
	<title>Bform</title>
</head>
<body>
	<form action="<?php echo base_url() ?>main/bookpay" method ="post">
		
	
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
			
			<label class=>Departure Time</label>
				<input type="text" name="dtime" value="<?php echo $row->dtime;?>">

			<label class=>Arrival Time</label>
				<input type="text" name="atime" value="<?php echo $row->atime;?>">


			
				
		<label>Business</label> 
		<label name="bcost"><?php echo $row->bcost;?></label>

		<label>Number of travellers</label><input type="text" name="t">


		<label>Number of senior citizens: </label><input type="text" name="ts">

		

		<input type="submit" name="submit" value="Book">

				



		<?php
	}
}
?>
	</form>
</body>
</html>
