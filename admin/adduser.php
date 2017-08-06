<?php
//session maintainence // kavindasilva
/**
 * get method eken user type eka ganna. ekata adalawa fields display karanna
 
 if(!isset($_SESSION['user'])){
	echo "user not set";
	//header('Location:../login.html');
 }
 elseif ($_SESSION['utype']!="adm") {
     echo "not an admin";
	 //header('Location:../login.html');
 }

/**/
include '../php/dbcon2.php';
//include  //header files & css,JS

$newUserType=$_GET['type'];


?>
<form method="post" action="">
<table>
	<tr><td>First name</td>	<td><input type="text" name="fname" autocomplete="off" required/></td></tr>
	<tr><td>Last name</td>	<td><input type="text" name="lname" autocomplete="off" required=""/></td></tr>
	<tr><td>Email</td>		<td><input type="email" name="eml" autocomplete="off" required=""/></td></tr>
	<tr><td>Address</td>	<td><textarea name="addr" autocomplete="off"></textarea></td></tr>
	<tr><td>Phone</td>		<td><input type="text" name="telp" autocomplete="off" required=""/></td></tr>
	
	<?php
	switch ($newUserType) {
	case 'cust': echo"<title>New customer</title>"; //mehema danna onida? theoritically wrong... head eke thamai danna oni
		customer();break;
	
	case 'salex': echo"<title>New Sales executive</title>";
		salesEx();break;
	
	case 'dealer': echo"<title>New Dealer</title>";
		;break;
	
	case 'suppl': echo"<title>New Supplier</title>";
		supplier();break;
	case 'ks':
		break;
	
	default:
		break;
}
	?>
	
	
	<tr><td><input type="submit" name="" value="OK" onclick="" /></td>	<td><input type="reset" value="Clear" /></td></tr>
</table>
</form>

<?php

function customer(){
	echo "<tr><td>Company</td>		<td><input type='text' name='comp' autocomplete='off'/></td></tr>";
}

function salesEx(){
	//echo "<tr><td>Company</td>	<td><input type='text' name='comp' autocomplete='off'/></td></tr>";
}

function supplier(){
	echo "<tr><td>Brand</td>		<td><input type='text' name='comp' autocomplete='on' required/></td></tr>";
	echo "<tr><td>Country</td>		<td><input type='text' name='comp' autocomplete='on' required/></td></tr>";
}

?>