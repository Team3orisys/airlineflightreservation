<!DOCTYPE html>
<html>
<head>
	<title>receipt</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <style>
            	
            	fieldset{
            		width:500px;
            		height: 600px;
            	}
            </style>

</head>
<body>
	<form action="" method="" class="form-control">
		<center><fieldset>
			<?php
				if($n->num_rows()>0)
				{
					foreach($n->result() as $row)
					{
				?>

	Name: <label> <?php echo $row->fname;?> <?php echo $row->lname;?></label><br>
	
	Airline: <label><?php echo $row->airlinename;?></label><br>
	
	Departure: <label><?php echo $row->departure;?></label><br>


	Departure Time: <label><?php echo $row->dtime;?></label><br>
	

	Arrival: <label><?php echo $row->arrival;?></label><br>
	
	Arrival Time: <label><?php echo $row->atime;?></label><br>
	
	class: <label><?php echo $row->class;?></label><br>
	Ticke Rate of <label><?php echo $row->class;?></label> class:  <label><?php echo $row->fcost;?></label><br>
	
	<?php
		$drate=$row->discount;
		$age=$row->age;
		$trate=$row->fcost;
		if($age>60){  
			$tot=$trate-$drate;
			?>

Discount Amount:<label><?php echo $row->discount;?></label><br>
			<?php

		}
		else{
			$tot=$row->fcost;
		}
		

	?>
	Total Price: <label><?php
echo $tot;
	?></label><br>

	<input type="submit" name="submit" value="pay">

	<?php
	}
}
?>

	</fieldset></center>

</form>
</body>
</html>