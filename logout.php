<!-- Christopher Theofilaktos and Michael Weaver NMIT 2012 -->
<link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to external CSS file -->

<?php
		echo "<h2>Logging out.....<h2>"; // Display a message
		session_start(); // Session must be started before it is destoyed
		session_destroy(); // Destroy the session

		header( "refresh:1;url=index.php" ); // Redirect back to index after 1 second
?>