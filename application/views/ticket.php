<!DOCTYPE html>
<html>
<head>
	<title>	Single user ticket view</title>


	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<section class="py-5 " >
		<div class="container text-center py-5 border w-50">

			<div class=""></div>
		<?php
				 if($n->num_rows()>0)
				 {
					foreach($n->result() as $row)
					{
				?>


			<div>
			<label>	Name:</label>
					<label><?php echo $row->fname;?></label><label><?php echo $row->lname;?></label>
			</div>

			<div>
			<label>Airline Name :</label>
					<label>	<?php echo $row->airlinename;?></label>
			</div>


			<div>
			<label>Departure:</label>
					<label><?php echo $row->departure;?></label>
			</div>

			<div>
			<label>Arrival:</label>
					<label><?php echo $row->arrival;?></label>
			</div>


			<div>
			<label>Departure Date:</label>
					<label><?php echo $row->date;?></label>
			</div>

			<div>
			<label>Departure Time:</label>
					<label><?php echo $row->dtime;?></label>
			</div>

			<div>
			<label>Arrival Time:</label>
					<label><?php echo $row->atime;?></label>
			</div>

			<div>
			<label>Class:</label>
					<label><?php echo $row->class;?></label>
			</div>

			<div>
			<label>Seat Number:</label>
					<label><?php echo $row->seat_no;?></label>
			</div>

			<div>
			<!-- <label>Total Amount:</label>
					<label></label> -->
			</div>

			<?php
	}
}
?>


		</div>



	</section>

</body>
</html>