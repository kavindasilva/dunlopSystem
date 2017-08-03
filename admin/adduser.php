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

?>
<form method="post" action="">
<table>
	<tr><td>First name</td> <td><input type="text" name="fname" /></td></tr>
	<tr><td>Last name</td> <td><input type="text" name="fname" /></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
</table>
</form>

<?php

?>