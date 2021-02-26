<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
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
 <nav class="navbar top1 navbar-expand-lg">
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div class="">
          <ul class="navbar-nav">
              <li class="nav-item"><a href="<?php echo base_url()?>main/admin" class="nav-link">Home</a></li> 
              <li class="nav-item"><a href="<?php echo base_url()?>main/airport" class="nav-link">Airport</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Flight</a>
                <ul>
                  <li class="nav-item"><a href="<?php echo base_url()?>main/flightreg" class="nav-link">Add</a></li>
                  <li class="nav-item"><a href="<?php echo base_url()?>main/flights" class="nav-link">View</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="#" class="nav-link">Notification</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="#" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div> 
 </nav>
 <!-----------------------------end------------------->

 <form  method="post" action="<?php echo base_url()?>main/flightupdate" class=" ">

    <?php
      if(isset($user_data))

      { 
                foreach($user_data->result() as $row1) 
        {
            echo "fgb";
        ?>
        <table>
          <tr>
            <td>Aireline Name</td>
            <td>
              <input type="text" name="airlinename" value="<?php echo $row1->airlinename;?>">
            </td>
          </tr>
          <tr>
            <td>Departure</td>
            <td>
              <input type="text" name="departure" value="<?php echo $row1->departure;?>">
            </td>
          </tr>
          <tr>
            <td>Arrival</td>
            <td>
              <textarea name="arrival"><?php echo $row1->arrival;?></textarea>
            </td>
          </tr>
          <tr>
            <td>Date</td>
            <td>
              <input type="text" name="date" value="<?php echo $row1->date;?>">
            </td>
          </tr>
          <tr>
            <td>Departure Time</td>
            <td>
              <input type="text" name="dtime" value="<?php echo $row1->dtime;?>">
            </td>
          </tr>
          <tr>
            <td>Arrival</td>
            <td>
              <input type="text" name="atime" value="<?php echo $row1->atime;?>">
            </td>
          </tr>
            <td>Cost</td>
            <td>
              <input type="text" name=" cost" value="<?php echo $row1-> cost;?>">
            </td>
          </tr>
          <tr>
            <td>Seat Capacity</td>
            <td>
              <input type="text" name=" seatcapacity" value="<?php echo $row1-> seatcapacity;?>">
            </td>
          </tr>
          <tr>
            <td>Bussiness</td>
            <td>
              <input type="text" name="business" value="<?php echo $row1->business;?>">
            </td>
          </tr>
           <tr>
            <td>Economy</td>
            <td>
              <input type="text" name="economy" value="<?php echo $row1->economy;?>">
            </td>
          </tr>
           <tr>
            <td>First</td>
            <td>
              <input type="text" name="first" value="<?php echo $row1->first;?>">
            </td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center;">
              <input type="hidden" name="id" value="<?php echo $row1->id;?>">
              <input type="submit" name="update" value="Update">
            </td>
          </tr>
        </table>
        <?php
      }
    }
    ?>
  </form>
</body>
</html>