<!DOCTYPE html>
<html>
    <head>
        <title>flight view by admin</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------custom style------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>
<style>
  table,tr,td,th
    {
      /*border:2px solid;*/
      border-collapse: collapse;
      padding: 10px;
      margin: 80px;
      margin-right: 100px;
      background-color: rgb(51, 102, 255);
      color: white;

    }
</style>
    </head>
  <body class="overhidden">
    <header>
        <nav>
            <div class="container-fluid top ">
                <div class="row">
                    <div class="col-7">
                        <a href="#" class="text-decoration-none text-white">Home Terms</a>
                    </div>
                <div class="col-5 text-end">
                    <i class="fab fa-facebook text-white "></i>
                    <i class="fab fa-instagram text-white "></i>
                    <i class="fab fa-linkedin text-white "></i>
                    <i class="fab fa-twitter text-white "></i>
                    <i class="fab fa-youtube text-white "></i>
                    <i class="fab fa-google text-white "></i>
                </div>
            </div>
        </div>
     </nav>  
 </header>
 <!--------------------menu section-------------->
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

              <li class="nav-item"><a href="<?php echo base_url()?>main/book" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="#" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div> 
 </nav>
 <!-----------------------------end------------------->
 <!---------------------section---------------------->
 <form action="<?php echo base_url()?>main/flights" method="post">
 <h1>flight details</h1>
 <table class="text-center">
      <tr>
        <th>Airline Name</th><th>Departure</th><th>Arrival</th><th>Date</th><th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Seating Capacity</th>
        <th>Bussiness</th>
        <th>Economy</th>
        <th>First</th>
        <th>Bussiness Cost</th>
        <th>Economy Cost</th>
        <th>First Cost</th>

        <th colspan="2">Action</th>

      </tr>
      <?php
        if($n->num_rows()>0)
        {
          foreach($n->result() as $row)
          {
        ?>
      <tr>
        <td><?php echo $row->airlinename; ?></td>
        <td><?php echo $row->departure; ?></td>
        <td><?php echo $row->arrival; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->dtime; ?></td>
        <td><?php echo $row->atime; ?></td>
        <td><?php echo $row->seatcapacity; ?></td>
        <td><?php echo $row->business; ?></td>
        <td><?php echo $row->economy; ?></td> 
        <td><?php echo $row->first; ?></td>
        <td><?php echo $row->bcost; ?></td>
        <td><?php echo $row->ecost; ?></td> 
        <td><?php echo $row->fcost; ?></td>

        <input type="hidden" name="id" value="<?php echo $row->id;?>">
        <td><a href="<?php echo base_url()?>main/updateflight/<?php echo $row->id;?>" class="text-decoration-none text-white ">Update</a></td>
        <td><a href="<?php echo base_url()?>main/deleteflight/<?php echo $row->id;?>" class="text-decoration-none text-white ">Delete</a></td>
      </tr>
      <?php
    }
  }
  ?>
    </table>
  </form>
</body>
</html>





</body>
</html>
