<?php
session_start();

include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Index";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("include-files/headfile.html");

include ("detectlogin.php");
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "<p> Amazing products for your home, for your work,  for you!<br/><br/><hr/>";


$sql="select prodId, prodName, prodPicName, prodPrice from production.product";
$exeSQL=mysql_query($sql) or die(mysql_error());

while($arrayprod=mysql_fetch_array($exeSQL)){
	echo "<br/>";
//make each product a link to the next page and pass the product id to the next page by URL
//concatenate a string of characters u_prodid which carries the value of the actual id
	echo "<p><a href=prodinfo.php?u_prodid=".$arrayprod['prodId'].">";
	echo $arrayprod['prodName'];
	echo "<br/>";
	echo "</a>";
	$name = $arrayprod['prodPicName'];
	echo "<img src='images/products/".$name."' /><br/>";
	echo "$ ".$arrayprod['prodPrice'];
	echo "<br/><br/>";
	echo "<hr>";
}


//include head layout
include("include-files/footfile.html");
?>
