
<table align ="center" border="1" width="700">

<tr>
	<th>First name</th>
	<th>Last name</th>
	<th>Contact number</th>
	<th>Address</th>
	<th>E-mail</th>
	
</tr>

<?php
$link = mysqli_connect("localhost","root","","u-bung system");

$select = "select * from customer";
$run = mysqli_query($link, $select);
while($row = mysqli_fetch_array($run)){

$firstname_cust=$row["firstname_cust"];
$lastname_cust=$row["lastname_cust"];
$contactnum_cust=$row["contactnum_cust"];
$address_cust=$row["address_cust"];
$email_cust=$row["email_cust"];


?>
<tr>
	<td><?php echo $firstname_cust;?></td>
	<td><?php echo $lastname_cust;?></td>
	<td><?php echo $contactnum_cust;?></td>
	<td><?php echo $address_cust;?></td>
	<td><?php echo $email_cust;?></td>
</tr>
<?php }?>
</table>