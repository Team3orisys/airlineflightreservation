<!DOCTYPE html>
<html>
<head>
	<title>booking</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

	.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline tr button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}
.top1{
background-color:#5c00e6;

}
.bi
            {
              background-image: url('../img/b2.jpg');
              background-size: cover; 
              background-attachment: fixed;
            }

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
</head>
<body class="bi">
<nav class="navbar top1 navbar-expand-lg ">
    <div class="container">
      <a href="#" class="text-decoration-none text-white">TRAVEL KITE</a>  
      <div >
          <ul class="navbar-nav">
              <li class="nav-item"><a href="<?php echo base_url()?>main/passenger" class="nav-link text-white">Home</a></li> 
              <li class="nav-item "><a href="<?php echo base_url()?>main/passprofile" class="nav-link text-white">View Profile</a></li>
              <li class="nav-item"><a href="<?php echo base_url()?>main/flightsearch" class="nav-link text-white">Search Flight</a></li>
              <li class="nav-item"><a href="<?php echo base_url()?>main/notiuser" class="nav-link text-white">Notification</a></li>
              <!-- <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>
 -->           <li class="nav-item"><a href="<?php echo base_url()?>main/logout" class="nav-link text-white">Log Out</a                 ></li>
          </ul>
      </div>
    </div> 
 </nav>


	<form method="post" action="<?php echo base_url()?>main/searchaction">
<table class=" form-inline
table table-primary table-stripped table-hover table-bordered mt-5 text-center">
<tr>
	<td>From</td>
	<td><input list="location" name="departure"placeholder="location">
		<datalist id="location">
			<option value="tvm">
			<option value="kochi">
			<option value="kannur">
			<option value="kozhikode">
			<option value="Banglore">
			<option value="Chennai">
			<option value="delhi">
		</datalist>
	</td>
	<td>To</td>
	<td><input list="location" name="arrival"placeholder="location">
		<datalist id="location">
			<option value="tvm">
			<option value="kochi">
			<option value="kozhikode">
			<option value="kannur">
			<option value="Banglore">
			<option value="Chennai">
			<option value="delhi">
		</datalist>
	</td>
	<td>Depart on</td>
	<td><input type="date" name="date"></td>
	<!-- <td>Travellers</td>
	<td><input type="text" name="travellers"placeholder="no of travellers"></td>
	<td><input list="class" name="class"placeholder="class">
		<datalist id="class">
			<option value="Economy">
			<option value="Business">
			<option value="Premium Economy">
		</datalist>
	</td> -->
</tr>
<tr><td><button type="submit">Submit</button></td></tr>
</table>
</form>
</body>
</html>