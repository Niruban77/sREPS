<?php 
	session_start(); 
	include 'header.php';

?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Login</h1>

                        <p> <p>Thank you <?php echo $_SESSION["email"]; ?>!<br />
<br>
We will pick up you retards from <?php echo $_POST['streetnumber'] . " " . $_POST['streetname']; ?> at <?php echo $_POST['pickuptime'];?> on <?php echo $_POST['pickupdate'];?>

<p>Timestamp <?php echo date("Y/m/d"); ?></p>

<?php






$con = mysql_connect("localhost","root","");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cabsonline", $con);
// SQL code to insert the POST values into the database
$date = date("m/d/y");
$time = date("h:i:s A"); 
$sql="INSERT INTO booking (email, unitnumber, streetnumber, streetname, suburb, phonenumber, pickupdate, pickuptime, bookingdate, bookingtime, status) 
VALUES
('$_SESSION[email]','$_POST[unitnumber]','$_POST[streetnumber]','$_POST[streetname]','$_POST[suburb]','$_POST[number]','$_POST[pickupdate]','$_POST[pickuptime]','$date','$time','unsassigned')";

if (!mysql_query($sql,$con))
  {
	die('Error: ' . mysql_error());
  }

  $id=mysql_insert_id();

echo "Your reference id(booking number) is : $id";


mysql_close($con);

?>
<p><a href="index.php">Go back</a></p>	

</p>
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