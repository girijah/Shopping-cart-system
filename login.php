<?php

session_start();

//create a variable called $pagename which contains the actual name of the page
$pagename="Login";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");

echo "<h3>Login</h3>";

echo "<form name = 'Login' method = 'POST' action = 'getlogin.php' >
<table border='0' width='350'>

<tr>
<td > &nbsp;  Email : </td>
<td > <input type = 'text' name='username' min='4' size='27' /> </td>
</tr>

<tr>
<td > &nbsp; Password: </td>
<td > <input type='password' name='password' min='4' size='27' /> </td>
</tr>

<tr>
<td> <input type='submit' value='Login'> </td>
<td >

<input type = 'reset' value = 'Clear Form'>
</td>
</tr>

</table>

</form>";

//include head layout
include("include-files/footfile.html");
?>
