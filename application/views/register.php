<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <style>
 	.bi{
 		background-image: url("..img/im2.svg");
 	}
 	.top{
	background-color:#5c00e6;
	}
	body{
		background-image: url("../img/im2.png"); 
	}
	

	</style> 
</head>
<body>

	<nav class="navbar navbar-expand-lg top1 sticky-top top">
    <div class="container">
    	 <img src="../img/logo.png" class="logo" style="height:50px;width:50px">
        <a href="" class="text-decoration-none text-white">TRAVEL KITE</a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="<?php echo base_url()?>main/index" class="nav-link text-white">Home</a>
                </li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url()?>main/login" class="nav-link text-white">Sign In</a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url()?>main/register" class="nav-link text-white" >Sign Up</a>
                </li>

                
                
            </ul>
        </div>
    </div>
</nav>
		
<!--nav end-->
<section>
	<h1 class="text-center my-5 pt-5">REGISTRATION</h1>
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/registration" class="form-control-sm ">
		<fieldset style="width:300px;height:700px;">
			
		<table>
		<tr>
			<td>
		 		First Name:
			</td>
			<td><input type="text" name="fname" placeholder="firstname" required maxlength="25" pattern="[a-zA-Z]+"></td>
		</tr>
		<tr>
			<td>
			Last Name:</td>
		<td><input type="text" name="lname"  placeholder="lastname" required maxlength="25" pattern="[a-zA-Z]+"></td>
		</tr>
		
		<tr>
			<td>
			Age:</td>
		<td><input type="text" name="age"  required></td>
		</tr>
	
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label>
			<input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td>
		</tr>

		<tr><td>Address:</td>
		<td><textarea name="address"  required></textarea></td></tr>
		
		<tr>
		<td>
		District:</td>
		<td><input list="district" name="district"  required>
			<datalist id="district">
				<option value="kollam">
				<option value="Trivandrum">
				<option value="kottayam">
				<option value="Alapuzha">
				<option value="Idukki">
			</datalist></td>
	</tr>
	
	<tr>
		<td>
		Phone number:</td>
		<td><input type="text" name="phno" placeholder="phoneno"  required  pattern="[7-9]{1}[0-9]{9}"></td>
	</tr>
	
	
		<tr><td>Email:</td>
		<td><input type="Email" name="email" placeholder="email" required></td></tr>
		<tr><td>Password:</td>
		<td><input type="Password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td></tr>
		<tr><td ><input type="submit" name="submit" value="Register" class="btn btn-primary "> </td></tr>
		

	</table>
</fieldset>
	

	</form>
</section>

</body>
</html>