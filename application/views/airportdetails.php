<!DOCTYPE html>
<html>
<head>
<title>ADD AIRPORT DETAILS</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

 <style>
 
 


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
 <nav class="navbar top1 navbar-expand-lg ">
    <div class="container">
      <div class="col-6">
      <img src="../img/logo.png" class="logo">
      <a href="#" class="text-decoration-none text-primary">TRAVEL KITE</a>
      </div>

      <div class="">
          <ul class="navbar-nav">
              <li class="nav-item"><a href="<?php echo base_url()?>main/admin" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="<?php echo base_url()?>main/airport" class="nav-link">Airport</a></li>
              <li class="nav-item"><a href="<?php echo base_url()?>main/flights" class="nav-link">Flight</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Notification</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Booking</a></li>
           <li class="nav-item"><a href="#" class="nav-link">Log Out </a></li>
          </ul>
      </div>
    </div>
 </nav>


<!--nav end-->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">ADD AIRPORT DETAILS</h3>
<form  method="post" action="<?php echo base_url()?>main/airport_action">
<fieldset>


<label class="form-label">Airport Name:</label>
<input type="text" name="aname" placeholder="Airport Name" required  class="form-control">

<label class="form-label">Abbreviation:</label>
<input type="text" name="abbreviation"  placeholder="Abbreviation" required  class="form-control">


<label class="form-label">City:</label>
<input type="text" name="city" placeholder="City" required class="form-control"><br>

<label >State:</label>
<input type="text" name="state" placeholder="state" required class="form-control">
<br>

<label class="form-label">Zip code:</label>
<input type="text" name="zipcode"  required  class="form-control" placeholder="Zip code">



<label class="">Timezone:</label>
<input type="datetime-local" name="timezone" placeholder="Timezone"  required class="form-control">


<div class="container text-center">

<input type="submit" name="submit" value="ADD" class="btn btn-primary w-50 mt-3  mb-3">
</div>


</fieldset>


</form>
</div>
</div>
</div>
</section >

</body>
</html>

