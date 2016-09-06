<div class="footer-container">
	<footer class="wrapper">
		<h3>© sREPS 2016
			<?php
				if (isset($_SESSION['email'])) echo " | " . $_SESSION['email'];
			?>
		</h3>
	</footer>
</div>
