<?php

session_start();

//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>Register and create a workedUP account</h2>";

echo "<table>";
echo "<form action='getregister.php' method='post'>";
echo "<tr><td>First Name</td><td><input type='text' name='fname' ></td></tr>";
echo "<tr><td>Last Name</td><td><input type='text' name='lname' ></td></tr>";
echo "<tr><td>Address</td><td><input type='text' name='address' ></td></tr>";
echo "<tr><td>Postcode</td><td><input type='text' name='postcode' ></td></tr>";
echo "<tr><td>Tel No</td><td><input type='text' name='tel' ></td></tr>";
echo "<tr><td>Email Address</td><td><input type='text' name='email' ></td></tr>";
echo "<tr><td>Password</td><td><input type='password' name='password' ></td></tr>";
echo "<tr><td>Confirm Password</td><td><input type='password' name='passconf' ></td></tr>";
echo "<tr><td><input type='submit' name='submit' value='Submit'></td><td><input type = 'reset' value = 'Reset'></td></tr>";
echo "</form>";
echo "</table>";


//include foot layout
include("include-files/footfile.html");
?>
