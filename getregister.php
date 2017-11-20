<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

include ("db.php");

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");
//line:15
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$address = $_POST['address'];
$postCode = $_POST['postcode'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['passconf'];
//line:28

 $expression = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  if (!preg_match($expression, $email)) {
    echo "Email not valid!";
    echo "<br/>";
    echo "Go back to <a href='register.php'>Register</a>";
  }else{ 

if($password!=$confirmPassword){
	//echo "The confirmation password and the password you entered didn't match! ";
	echo "<br/>";
	echo "The 2 passwords you entered do not match";
	echo "<br/>";
	echo "Please make sure you enter them correctly";
	echo "<br/>";	
	echo "Go back to <a href='register.php'>Register</a> ";
	echo "<br/>";
}

//line:40
$sql="insert into users(userId , userType, userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword ) values (DEFAULT,'C',
'{$firstName}','{$lastName}' ,'{$address}','{$postCode}', '{$tel}','{$email}','{$password}')";

if ((!empty($firstName)&&!empty($lastName)&&!empty($address)&&!empty($postCode)&&!empty($tel)&&!empty($email)&&!empty($password)&&!empty($confirmPassword))) {
	if($password==$confirmPassword && mysql_query($sql)&&(mysql_errno($conn)==0)){
	    //echo "New record created successfully";	
		echo "<br/>";		
		//echo "You have been registered as a member of workedUP!";
		//echo "<br/>Access your new account here <a href='login.php'>Login</a>";	
		echo "You have successfully registered in the system!";
		echo "To continue, please <a href='login.php'>login</a>";		
	}else if(mysql_errno($conn)==1062){
		  echo "<br/>";
	 //echo "The email address you entered '{$email}' is already in use with an existing workedUP account!";
	   echo "There is an error with your registration";
	   echo "<br/>";
	 echo "The email you entered already exists";
	   echo "<br/>";
	 echo "Go back to <a href='register.php'>Register</a>";
	}else if(mysql_errno($conn)!=0){
	// echo "error number: ".mysql_errno($conn);
	  echo "<br/>";
	  echo "There is an error with your registration";
	   echo "<br/>";
	     echo "<br/>";
	    echo "Go back to <a href='register.php'>Register</a>";
     // echo "Error: " . $sql . "<br>" . mysql_error($conn);	
	}
  
} else if(empty($firstName)||empty($lastName)||empty($address)||empty($postCode)||empty($tel)||empty($email)||empty($password)||empty($confirmPassword)){
	echo "All fields are compulsory";
 	echo "<br/>";
	echo "Go back to <a href='register.php'>Register</a>";
}

}


//echo "name: ".$firstName ;
//echo "<p> Text Here";

//include foot layout
include("include-files/footfile.html");
?>
