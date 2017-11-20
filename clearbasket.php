<?php

session_start();

//call in the style sheet called stylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//create a variable called $pagename which contains the actual name of the page
$pagename="Clear Basket";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");

include ("detectlogin.php");
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

unset($_SESSION['basket']);
echo "Ordering basket now clear";


//include foot layout
include("include-files/footfile.html");
?>
