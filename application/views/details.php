<html>
</!DOCTYPE html>
<html>
<head>
	<title>

		details

	</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <style>
            	.bi
            {
              background-image: url('../img/b2.jpg');
              background-size: cover; 
              background-attachment: fixed;
            }
            </style>
</head>
<body class="bi">
	<?php


	if(isset($n))
{
	//print_r($n);
?>

<div class="container py-5">
<form action="<?php echo base_url()?>main/seatavail" method="post">
	
	Class<select name="seat">
		
		<option value="business">Business</option>
		<option value="Economic">Economic</option>
		<option value="first">first</option>
	</select>
	<a href="<?php echo base_url()?>main/flightsearch" class="btn btn-secondary">Back</a>
	<input type="submit" name="avail" value="class">

</form>
</div>
<?php 
	}
	

	if(isset($no))
{

	$d=$no;
	if($d<10)
	{
		$av=10-$d;

	?>

	<form action="<?php echo base_url()?>main/receipt" method="post">
		<table class=" table table-primary table-stripped table-hover table-bordered mt-5 text-center">
		<tr><td>no of seat available</td><td><input type="text" name="noseat" value=<?php echo $av;?>></td>
		<!-- no of traveller<input type="text" name="traveller" >
		no of senior<input type="text" name="senior" > -->
		<td><a href="<?php echo base_url()?>main/flightsearch" class="btn btn-secondary">Back</a></td>
		<td>
		<input type="submit"name="book" value="book" class="btn btn-secondary">
	</td>
</tr>
</table>
 	<?php
}

	
}
?>
</body>
</html>