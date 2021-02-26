<!DOCTYPE html>
<html>
<head>
	<title>Flight Notification Adding</title>

	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------------custom style-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

	<style>
		
		fieldset{
			width:500px;
			height: 400px;

		}
	</style>
</head>
<body>

	<nav class="navbar top1 navbar-expand-lg menubar" >
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div class="">
          <ul class="navbar-nav ">
              <li class="nav-item"><a href="<?php echo base_url()?>main/admin" class="nav-link">Home</a></li> 

              <li class="nav-item"><a href="<?php echo base_url()?>main/airport" class="nav-link">Airport</a></li>

              <li class="nav-item"><a href="#" class="nav-link">Flight</a>
                <ul class="submenu ">

                  <li class="nav-item "><a href="<?php echo base_url()?>main/flightreg" class="nav-link">Add</a></li>
                  
                  <li class="nav-item"><a href="<?php echo base_url()?>main/flights" class="nav-link">View</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">            Notification</a>
                <ul class="submenu">

                  <li class="nav-item"><a href="<?php echo base_url()?>main/notification" class="nav-link">Add</a></li>
                  <li class="nav-item"><a href="<?php echo base_url()?>main/notiadmin" class="nav-link">View</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="#" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div> 
 </nav>
	

<form method="post" action="<?php echo base_url()?>main/notify_action" class="form-group">
	<center>
		
		<fieldset class="mt-3">
			<h1>Flight notification</h1>
			Select Flight: 
			<select name="flight" class="form-select">
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
			</select><br><br>
			<textarea placeholder="Notification" name="noti" class="form-control"></textarea><br><br>

			<a href="<?php echo base_url()?>main/admin" class="btn btn-secondary"> Back </a>
			<input type="submit" name="submit" value="Notify" class="btn btn-primary">
			
		</fieldset>
	</center>

</form>

</body>
</html>