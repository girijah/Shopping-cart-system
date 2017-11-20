<?php

session_start();
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

$total=0.00;

  if(!isset($_SESSION['basket'])){
	$_SESSION['basket']=array();
            }

//echo "ID: ". @$newprodid ;

//call in the style sheet called stylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=style/mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout 
include ("include-files/headfile.html");

include ("detectlogin.php");
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
	
	
	if(isset($_POST['h_prodid'])) {

	$newprodid = $_POST['h_prodid'];
	$reququantity = $_POST["p_quantity"];

//echo "ID: ". @$newprodid ;
//echo "Qty: ".@$reququantity ;

	if(isset($_SESSION['basket'][$newprodid])){

	$_SESSION['basket'][$newprodid]=$_SESSION['basket'][$newprodid]+$reququantity ;

	}else if(isset($newprodid) && !isset($_SESSION['basket'][$newprodid])) {

	$_SESSION['basket'][$newprodid]=$reququantity;

	}
}

//echo "iddd ".$newprodid;// this is not global variable, global variable scope is with function scope and outer function scope not inside if block


	if(empty($newprodid)){
	echo "Existing basket";
	echo "<br/><br/>";
	}else{
	echo "Your basket has been updated";	
	echo "<br/><br/>";
	}

	if(count($_SESSION['basket'])==0){
		$total=0.00;
		echo "<i>Your basket is empty!</i>"; 
		echo "<br/><br/>";
	}
	
	//if(count($_SESSION['basket'])>0){
		//echo "".count($_SESSION['basket']);
	echo "<table border=1>";
echo "<th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th>";
foreach($_SESSION['basket'] as $id=>$qty){
	//echo "<br/>id: ".$id;
	//echo "<br/>qty: ".$qty;
	$sql="select prodName, prodPrice, prodQuantity from product where prodId=".$id;

	//execute SQL query	
	$exeSQL=mysql_query($sql) or die(mysql_error());
	
	//create array of records & populate it with result of the execution of the SQL query
	$rowInArray=mysql_fetch_array($exeSQL);

	$subtotal=$rowInArray['prodPrice'] * $qty;
echo "<tr><td>{$rowInArray['prodName']}</td><td> GBP {$rowInArray['prodPrice']}</td><td>{$qty}</td><td> GBP {$subtotal}</td></tr>";
	
	$total = $total + $rowInArray['prodPrice'] * $qty;

}
echo "<tr><td colspan=3>Total</td><td>GBP {$total}</td></tr>";
echo "</table>";
//	}

	
	 if(isset($_SESSION['basket'])){
				echo "<br/><br/>";
				echo "<a href='clearbasket.php'>Clear Basket</a>";	
				echo "<br/><br/>";				
			}
			
			echo "New workedUp Customers <a href='register.php'>Register</a>";
			echo "<br/>";
			echo "Registered workedUp Members <a href='#'>Login</a>";
			echo "<br/><br/>";

//include foot layout
include("include-files/footfile.html");
?>
