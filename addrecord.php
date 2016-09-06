<?php
session_start();
	$host = "localhost";
	$user = "root"; // your user name
	$pwd = ""; // your password
	$sql_db = "srepsdb"; // your database

	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

	$user_email = $_SESSION['email'];

	$currentdate = date('Y-m-d');

	$quantity = $_POST["item_quantity"];

	if (!$conn)
	{
		// Displays an error message
		echo "<p>Database connection failure</p>"; // not in production script
	}
	else
	{
		$query = "insert into sale (sale_id, user_email, date, quantity)
				value (NULL, '$user_email', '$currentdate', '$quantity')";

		$result = mysqli_query($conn, $query);

		if(!$result)
		{
			 echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		}
		else
		{
			 header('Location:sales.php');
		}

		mysqli_close($conn);
	}
?>
