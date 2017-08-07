<?php
//NO session maintainence // kavindasilva
/**
 * contains only admin functions. Unauthorized access is not monitored
 * functions: Add new user

 /**/
include '../php/dbcon2.php';
//include  //header files & css,JS

$newUserType = $_POST['utype'];
$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$username=$fnm.$lnm; //username eka unique, PK. 

$em=$_POST['eml'];
$adr=$_POST['addr'];
$phn=$_POST['telp'];
//insertUser();

//check if username taken <> flash window eka dammata passe meka oni na
$sql="select * from user where user_name='$username'";
$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
	echo "User name already taken"; //JS aler passe damu
	echo "<hr><a href=\"javascript:history.go(-1)\">GO BACK</a>";
	return;
}

$sql="insert into values('$username', 'skm', '$em', '$adr', '$newUserType')";
if(!mysqli_query($conn, $sql)){
	echo "user insertion error";
	return;
}


switch ($newUserType) { //checks the user type to be inserted
	case 'cust' :
		customer("insert into regular_customer values();");
		break;

	case 'salex' :
		salesEx();
		break;

	case 'dealer' :
		dealer();
		break;

	case 'suppl' :
		supplier();
		break;
	case 'ks' :
		break;

	default :
		break;
}



function customer($sqlq) {
	$res = mysqli_query($GLOBALS['conn'], $sqlq);
	//result
}

function salesEx() {
}

function supplier() {
}

function dealer() {
}
?>