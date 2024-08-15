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

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 300px;
  right: -100px;
  background-color: rosyBrown;
  color: white;
  padding-left: 60px;
  padding-right: 60px;
  text-size:30px;
}

.kedudukanbutton{
align: center;
}


.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  display-align:center;
  
}

</style>
</head>
<title>U-BUNG ONLINE SYSTEM></title>


<body>

<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#login">Login</a>
  <a href="#despatcher">Despatcher</a>
  <a href="#restaurant">Restaurant</a>
  <a href="#admin">Admin</a>
  <a href="#about">About</a>
</div>

<div class="content" style="max-width:500px">
  <h1><center>U-BUNG ONLINE SYSTEM</center></h1>

  <img class="mySlides" src="nasilemak.jpeg" style="width:230%">
  <img class="mySlides" src="mee.jpeg" style="width:230%">
  <img class="mySlides" src="briani.jpeg" style="width:230%">
 
  <div class="container">

  <div class="text-block">
    <h2>It's the food you love, delivered!</h2>
    <p>What are you waiting for, hurry up and use our service. It is fast, cheap and reliable. Click here to start oder your favourite food from your favourite restaurant !</p>
	
	<center><a href="#" class="button">Start Order</a><center>
 
  
  </div>
</div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
