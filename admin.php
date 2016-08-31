<?php
    session_start();
	include 'header.php';
?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <?php
                        if (isset($_SESSION['admin'])) echo "<h1>Admin page</h1>
                        <p>You are an Admin, enjoy</p>

                    1. Click below button to search for all unassigned booking requests with a pick-up time within 2 hours.<br>
                    <label>&nbsp; </label> <input type='submit' value='List all' class='button'  />";
                        else
                        {
                           // echo "<h1>Welcome " , $_SESSION['email'] . "</h1>";
                            echo "<h2> You are not an admin. Access denied</h2>";
                        }
                        ?>
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
