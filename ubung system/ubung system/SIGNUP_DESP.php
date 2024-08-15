<?php


if(isset($_POST['SignUp'])){
	if(empty($_POST['firstname_desp']))
	{
	echo 'firstname is required<br/>';
	}
	else
	{
		echo $_POST['firstname_desp'];
		}
		
	if(empty($_POST['lastname_desp']))
	{
	echo 'lastname is required<br/>';
	}
	else
	{
		echo $_POST['lastname_desp'];
		}
		
	if(empty($_POST['contactnum_desp']))
	{
	echo 'contact number is required<br/>';
	}
	else
	{
		echo $_POST['contactnum_desp'];
		}
	
	if(empty($_POST['address_desp']))
	{
	echo 'address is required<br/>';
	}
	else
	{
		echo $_POST['address_desp'];
		}
	
	if(empty($_POST['email_desp']))
	{
	echo 'email is required<br/>';
	}
	else
	{
		echo $_POST['email_desp'];
		}
		
	if(empty($_POST['password_desp']))
	{
	echo 'password is required<br/>';
	}
	else{
		echo $_POST['password_desp'];
		}

}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: saddleBrown;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #8B0000;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}




</style>
</head>
<title>U-BUNG ONLINE SYSTEM></title>


<body>

<div class="sidebar">
  <a  href="#home">Home</a>
  <a  href="#login">Login</a>
  <a class="active" href="#despatcher">Despatcher</a>
  <a href="#restaurant">Restaurant</a>
  <a href="#admin">Admin</a>
  <a href="#about">About</a>
</div>


  
  <?php include('template/header.php');?>
  
  <section class="container grey-text">
  <h4 class="center">Despatcher Sign Up</h4>
  <form class="white" action="Despatcher.php" method="POST">
  <label>First name:</label>
  <input type="text" name="firstname_desp">
  <label>Last name:</label>
  <input type="text" name="lastname_desp">
  <label>Contact number:</label>
  <input type="text" name="contactnum_desp">
  <label>Address:</label>
  <input type="text" name="address_desp">
  <label>E-mail:</label>
  <input type="text" name="email_desp">
  <label>Password:</label>
  <input type="text" name="password_desp">
  <div class="center">
  <input type="submit" name="SignUp" value="Sign Up" class="btn brand z-depth-0">
  </div>
  </form>
  </section>
 
<?php include('template/footer.php');?>
  

</body>
</html>