<?php
	$host = "localhost"; 
	$user = "root"; // your user name 
	$pwd = ""; // your password
	$sql_db = "srepsdb"; // your database 

	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

	$itemname = trim($_POST['item_name']);
	$itemcategory = trim($_POST['item_category']);
	$itemquantity = trim($_POST['item_quantity']);
	$itemprice = trim($_POST['item_price']);
	
	
	if (!$conn) 
	{ 
		// Displays an error message 
		echo "<p>Database connection failure</p>"; // not in production script 
	} 
	else
	{
		$query = "insert into item (item_id, item_name, item_category, item_quantity, item_price)
				value (NULL, '$itemname', '$itemcategory', '$itemquantity', '$itemprice')";
				
		$result = mysqli_query($conn, $query);
		
		if(!$result)
		{
			 echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		}
		else
		{
			 header('Location:items.php');
		}
		
		mysqli_close($conn); 
	}	
?>