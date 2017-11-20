<?php
@session_start();

if(isset($_SESSION['c_userfname'])){
echo "<p align='right'><i>Name: ".@$_SESSION['c_userfname']. " ".@$_SESSION['c_userlname']."/ Customer No: ".@$_SESSION['c_userid']."</i></p>";
echo "<hr/>";

}

//call in the style sheet called stylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";


echo "<p></p>";
//display name of the page and some random text
echo "<h2>"."</h2>";
echo "<p> ";


?>
