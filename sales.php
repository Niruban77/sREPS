<?php
    session_start();
	include 'header.php';

?>
        <div class="main-container">
            <div class="main wrapper clearfix">

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
			$query = "SELECT * FROM sale";

			$result = mysqli_query($conn, $query);

			if(!$result)
			{
				echo "<p>Something is wrong with ", $query, "</p>";
			}
			else
			{

			}
		}
	?>
		<div id="contact-form">
			<h1>Add a Sale</h1>
			<form action="addrecord.php" method="post">
				<label>
					<?php
						$conn2 = @mysqli_connect($host, $user, $pwd, $sql_db);

						if (!$conn2)
						{
							// Displays an error message
							echo "<p>Database connection failure</p>"; // not in production script
						}
						else
						{
							$query2 = "SELECT item_name FROM item";

							$result2 = mysqli_query($conn2, $query2);

							if(!$result2)
							{
								echo "<p>Something is wrong with ", $query, "</p>";
							}
							else
							{
								echo '<select name="item_name">';

								while ($row2 = mysqli_fetch_assoc($result2))
								{
									echo '<option>',$row2["item_name"],'</option>';
								}
								echo "</select>";
							}
						}
					?>
          <label>Quantity: <input type="text" name="item_quantity" size="1" value="1"></label>

				</label>
				<label>&nbsp; </label>
				<label><input type="submit" value="Submit" class="button" /></label>
			</form>
		</div>

<!-- Edit Record -->

    <div id="contact-form">
      <h1>Delete a Sale</h1>
      <form action="deletesales.php" method="post">
        <label>
          <?php
            $conn2 = @mysqli_connect($host, $user, $pwd, $sql_db);

            if (!$conn2)
            {
              // Displays an error message
              echo "<p>Database connection failure</p>"; // not in production script
            }
            else
            {
              $query2 = "select sale_id from sale";

              $result2 = mysqli_query($conn2, $query2);

              if(!$result2)
              {
                echo "<p>Something is wrong with ", $query, "</p>";
              }
              else
              {
                echo '<select name="sale_id">';

                while ($row2 = mysqli_fetch_assoc($result2))
                {
                  echo '<option>',$row2["sale_id"],'</option>';
                }

                echo "</select>";
              }
            }
          ?>
        </label>
        <label>&nbsp; </label>
        <label><input type="submit" value="Delete" class="button" /></label>
      </form>
    </div>

<?php
echo "<table id=\"salelist\" border=\"1\">";
echo "<tr>"
  ."<th scope=\"col\">Sale ID</th>"
  ."<th scope=\"col\">Staff Email</th>"
  ."<th scope=\"col\">Date</th>"
  ."<th scope=\"col\">Quantity</th>"
  ."</tr>";


  while ($row = mysqli_fetch_assoc($result))
  {
    $itemtable = "";

    echo "<tr>";
    echo "<td>",$row["sale_id"],"</td>";
    echo "<td>",$row["user_email"],"</td>";
    echo "<td>",$row["date"],"</td>";
    echo "<td>",$row["quantity"],"</td>";
    echo "</tr>";
  }

echo "</table>";
?>
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
