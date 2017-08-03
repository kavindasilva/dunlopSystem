<?php
//session maintainence // kavindasilva
/**
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
<script type="text/javascript" src="adminFun.js"></script>
methana adminge control panel eka danna(button set eka)
<form method="get" action="">
<input ty />
</form>


<?php
//view all users
function viewAll2(){
	$sqlq = "select * from users;"; //sql query, users list
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No users in the system</p>";
	
	else {
		echo "<table id='tblstd'>";
		echo "<tr> <th>ID</th> <th></th> <th>First name</th> <th>Last name</th> <th>Birthday</th> <th>class</th>";
		echo " <th>sex</th> <th>telephone1</th> <th>telephone2</th> <th>Address</th></tr>";
		
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";
			//echo "<form method='post' action='funs1.php' onsubmit='confirmD();'>";
			//echo "<form method='post' action=''>"; //auto refreshing
			
			echo "<tr><input type='text' name='sid' value='" . $row['sid'] . "' hidden/>"; //make teacher
			echo "<input type='text' name='actor' value='ss' hidden/>"; //set as student 
			
			echo "<td>" . $row['sid'] . "</td>";
			echo "<td>" . $row['photo'] . "</td>";
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
			echo "<td>" . $row['dob'] . "</td>";
			echo "<td>" . $row['class'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "<td>" . $row['tel1'] . "</td>";
			echo "<td>" . $row['tel2'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			
			echo "<td><input type='submit' name='update' onclick='return confirmU()' value='Update'/></td>";
			echo "<td><input type='submit' name='delete' onclick='return confirmD()' value='DELETE' style='color:red'/></td></tr></form>";	
		}
		echo "</table>";
	}
	
}

?>

