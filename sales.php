<?php 
    session_start();
	include 'header.php';

?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Add a sale</h1>
                        <div id="contact-form">
                         <form action="reg-sales.php" method="post">

                            <label>&nbsp; </label> <input type="submit" value="Submit" class="button" />
                            <input type="reset" value="Cancel" class="button" />
                        </form></div>
                    </header>

                </article>

               <!-- <aside>
                    <h3>You are not logged in</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>-->

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
