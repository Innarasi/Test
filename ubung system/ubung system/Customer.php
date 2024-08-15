<?php

$link = mysqli_connect("localhost", "root");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($link, "u-bung system") or die(mysqli_error());

//$firstname_cust=$_REQUEST["firstname_cust"];
//$lastname_cust=$_REQUEST["lastname_cust"];
//$contactnum_cust=$_REQUEST["contactnum_cust"];
//$address_cust=$_REQUEST["address_cust"];
//$email_cust=$_REQUEST["email_cust"];
//$password_cust=$_REQUEST["password_cust"];

$query = "insert into customer values('$_POST[firstname_cust]','$_POST[lastname_cust]','$_POST[contactnum_cust]','$_POST[address_cust]','$_POST[email_cust]','$_POST[password_cust]')" or die(mysqli_connect_error());
 
$result = mysqli_query($link, $query);
if($result) 
	        {
		        
                echo("Insertion is successfull");
				echo "<p><a href='View_customer.php'>Click here to list the table</a></p>";
					
		}
		else 
	        {
			        
	            die("Insertion is failed");
	        }

mysqli_close($link);
?>