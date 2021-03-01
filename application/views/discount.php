<!DOCTYPE html>
<html>
<head>
	<title>Discount</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>


</head>
<body>
<form action="<?php echo base_url() ?>main/discount_action" method="post">
	Flight:
	<select name="flight" class="form-select form-select-md mb-3">
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

	discount:<input type="text" name="discount" class="input-group mb-3 form-control">
	<input type="submit" name="submit" value="submit" class="btn btn-secondary">
</form>
</body>
</html>