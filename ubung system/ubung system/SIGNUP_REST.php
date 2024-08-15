<?php


if(isset($_POST['SignUp'])){
	if(empty($_POST['rest_name']))
	{
	echo 'restaurant name is required<br/>';
	}
	else
	{
		echo $_POST['rest_name'];
		}
		
	if(empty($_POST['rest_owner']))
	{
	echo 'owner name is required<br/>';
	}
	else
	{
		echo $_POST['rest_owner'];
		}
		
	if(empty($_POST['rest_contactnum']))
	{
	echo 'contact number is required<br/>';
	}
	else
	{
		echo $_POST['rest_contactnum'];
		}
	
	if(empty($_POST['rest_address']))
	{
	echo 'address is required<br/>';
	}
	else
	{
		echo $_POST['rest_address'];
		}
	
	if(empty($_POST['rest_email']))
	{
	echo 'email is required<br/>';
	}
	else
	{
		echo $_POST['rest_email'];
		}
		
	if(empty($_POST['rest_password']))
	{
	echo 'password is required<br/>';
	}
	else{
		echo $_POST['rest_password'];
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
  <a href="#despatcher">Despatcher</a>
  <a class="active"href="#restaurant">Restaurant</a>
  <a href="#admin">Admin</a>
  <a href="#about">About</a>
</div>


  
  <?php include('template/header.php');?>
  
  <section class="container grey-text">
  <h4 class="center">Restaurant Sign Up</h4>
  <form class="white" action="Customer.php" method="POST">
  <label>Restaurant name:</label>
  <input type="text" name="rest_name">
  <label>Owner name:</label>
  <input type="text" name="rest_owner">
  <label>Contact number:</label>
  <input type="text" name="rest_contactnum">
  <label>Address:</label>
  <input type="text" name="rest_address">
  <label>E-mail:</label>
  <input type="text" name="rest_email">
  <label>Password:</label>
  <input type="text" name="rest_password">
  <div class="center">
  <input type="submit" name="SignUp" value="Sign Up" class="btn brand z-depth-0">
  </div>
  </form>
  </section>
 
<?php include('template/footer.php');?>
  

</body>
</html>