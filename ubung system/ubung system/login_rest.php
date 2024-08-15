<?php

if(isset($_POST['login'])){
	if(empty($_POST['email_rest']))
	{
	echo 'email is required<br/>';
	}
	else
	{
		echo $_POST['email_rest'];
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
  <a class="active" href="#restaurant">Restaurant</a>
  <a href="#admin">Admin</a>
  <a href="#about">About</a>
</div>


  
  <?php include('template/header.php');?>
  
  <section class="container grey-text">
  <h4 class="center">Restaurant Login</h4>
  <form class="white" action="Restaurant.php" method="POST">
  <label>Email:</label>
  <input type="text" name="rest_email">
  <label>Password:</label>
  <input type="text" name="rest_password">
  <div class="center">
  <input type="submit" name="login" value="login" class="btn brand z-depth-0">
  </div>
  </form>
  </section>
 
<?php include('template/footer.php');?>
  

</body>
</html>
