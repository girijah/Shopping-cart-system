<?php

session_start();

//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";

include('db.php');
//call in the style sheet called stylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$username = $_POST['username'];
$password = $_POST['password'];

//echo $username;
//echo $password;

if(empty($username)||empty($password)){
	echo "Your form is incomplete";
	echo "<br/>";
	echo "Please fill in all the required details";
	echo "<br/>";
	echo "Go back to <a href='login.php'>login</a> ";
}else{

$sqlselect = "SELECT userId, userType, userEmail, userPassword, userFName, userSName FROM users where userEmail='".$username."'";

$result = mysql_query($sqlselect, $conn);

if (mysql_num_rows($result) > 0) {

$row=mysql_fetch_assoc($result);

	if($row['userEmail']==$username && $row['userPassword']!=$password){
		echo "Sorry, the password you entered is not valid";
		echo "<br/>";
		echo "Go back to <a href='login.php'>login</a>";
	}else if($row['userEmail']==$username && $row['userPassword']==$password){
		
	if($row['userType']=='A'){
		echo "Hello Admin, Your ID ".$row["userId"].": ".$row["userFName"]." ".$row["userSName"];
		echo "<a href='#.php'>Admin menu</a>";
		
	}else if($row["userType"]=="C"){
				
		if(!isset($_SESSION['c_userfname'])){
		$_SESSION['c_userid']=$row['userId'];
		$_SESSION['c_userfname']=$row['userFName'];
		$_SESSION['c_userlname']=$row['userSName'];	
		}
		
		echo "<b>Hello, ".@$_SESSION['c_userfname']." ".@$_SESSION['c_userlname']."</b>";
		echo "<br/>";
		echo "You have successfully logged into the system!";
		echo "<br/>";
		//echo "The email you enetered is ".$username;
		//echo "<br/>";
		//echo "The password you entered is ".$password;
		echo "<br/>";
		echo "<br/>";
		echo "To continue shopping <a href='index.php'>Product Index</a>";
		echo "<br/>";
		echo "To view your basket <a href='basket.php'>My Basket</a>";
		//unset($_SESSION['c_userid']);
		//unset($_SESSION['c_userfname']);
		//unset($_SESSION['c_userlname']);
		
	}
	}	
}else{
	echo "Sorry, the email you entered is not recognized";
	echo "<br/>";
	echo "Go back to <a href='login.php'>login</a>";
}
}
//include foot layout
include('include-files/footfile.html');
?>
