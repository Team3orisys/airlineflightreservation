<!DOCTYPE html>
<html>
<head>
	<title>Admin Notification View</title>

	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
	<!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

</head>
<body class="body">

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

              <li class="nav-item"><a href="#" class="nav-link">Notification</a>
                <ul class="submenu">

                  <li class="nav-item"><a href="<?php echo base_url()?>main/notification" class="nav-link">Add</a></li>
                  <li class="nav-item"><a href="<?php echo base_url()?>main/notiadmin" class="nav-link">View</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="<?php echo base_url()?>main/logout" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div> 
 </nav>


	<h2 class="text-primary text-center py-3">NOTIFICATIONS</h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 ">
		<thead>
			<tr class>
				<th> Flight ID</th>
				<th>Airline Name</th>
				<th>Notification</th>
				<th>Action</th>
				<th>Action</th>
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
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->airlinename;?></td>
							<td><?php echo $row->notification?></td>
							<td><a href="<?php echo base_url()?>main/notify_delete/<?php echo $row->n_id;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							<td><a href="<?php echo base_url()?>main/admin_update/<?php echo $row->n_id;?>" class="text-decoration-none btn-outline-success ">Update</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	<a href="<?php echo base_url()?>main/admin" class="btn btn-primary ">Back to Home</a>
	</div>

</body>
</html>