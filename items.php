<?php 
    session_start();
	include 'header.php';

?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Item List</h1>
						
						<?php
						
						$host = "localhost"; 
						$user = "root"; // your user name 
						$pwd = ""; // your password
						$sql_db = "srepsdb"; // your database 
						
						$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
						
						if (!$conn) 
						{ 
							// Displays an error message 
							echo "<p>Database connection failure</p>"; // not in production script 
						} 
						else 
						{
							$query = "select * from item";
							
							$result = mysqli_query($conn, $query); 
							
							if(!$result) 
							{ 
								echo "<p>Something is wrong with ", $query, "</p>"; 
							} 
							else 
							{
								echo "<table id=\"itemlist\" border=\"1\">"; 
								echo "<tr>"
									."<th scope=\"col\">ID</th>" 
									."<th scope=\"col\">Name</th>"
									."<th scope=\"col\">Category</th>"
									."<th scope=\"col\">Quantity</th>"
									."<th scope=\"col\">Price</th>" 
									."</tr>"; 
								
								
									while ($row = mysqli_fetch_assoc($result))
									{ 
										$itemtable = "";
																									
										echo "<tr>"; 
										echo "<td>",$row["item_id"],"</td>"; 
										echo "<td>",$row["item_name"],"</td>"; 
										echo "<td>",$row["item_category"],"</td>";
										echo "<td>",$row["item_quantity"],"</td>";
										echo "<td>",$row["item_price"],"</td>";
										echo "</tr>"; 
									} 
									
								echo "</table>"; 	
							}
						}
						?>
						
                        <div id="contact-form">
						<h1>Add an Item</h1>
                        <form action="reg-sales.php" method="post">
							<label>&nbsp; </label> <input type="submit" value="Submit" class="button" />
							<input type="reset" value="Cancel" class="button" />
                        </form></div>
                    </header>

                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->
		
<?php 
	include 'footer.php';
?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
