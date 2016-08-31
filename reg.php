<?php 
	include 'header.php';
?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Login</h1>
                        <p> <p>Welcome <?php echo $_POST["name"]; ?>!<br />
<br>
Email: <?php echo $_POST["email"]; ?> <br>

<p>Timestamp <?php echo date("Y/m/d"); ?></p>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srepsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO users (email, password, name) 
VALUES
('$_POST[email]','$_POST[password]','$_POST[name]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<p><a href="log.php">Go back</a> and login</p>	

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
