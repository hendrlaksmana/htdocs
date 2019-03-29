<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Candralab Studio</title>

		<link rel="stylesheet" href="assets/pure-min.css">
		<link rel="stylesheet" href="assets/baby-blue.css">

	</head>

	<body>
		<div id="layout">
			<a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="/">Menu</a>

					<ul>

						<li class=" ">
							<a href="index.php?m=content&p=home">Home</a>
						</li>
						<li class=" ">
							<a href="index.php?m=content&p=produk">Produk</a>
						</li>
						<li class=" ">
							<a href="index.php?m=content&p=kontak">contact</a>
						</li>

					</ul>
				</div>
			</div><!--div menu -->
<!--- Content ------------------------------->
			<div id="main">

				<div class="header">
					<h2>Candralab Studio </h2>

					<h3>Mobile and Web Development Company</h3>

				</div>

				<div class="content">
					<?php
           
            if (!isset($_GET['p'])) {
                include ('content/home.php');
            } else {
                $page = $_GET['p'];
                $modul = $_GET['m'];
                include $modul . '/' . $page . ".php";
            }
            ?>
				</div>

				<!-------------FOOOOOOOOOOOOOOOOOOOOOTER----------------------------->
				<div class="footer">
					<div class="legal pure-g">
				
						<div class="pure-u-1 pure-u-sm-1-2">

							<p class="legal-copyright">
								&copy; 2014 Candralab Studio All rights reserved.
							</p>
						</div>
					</div>

				</div>
			</div><!-- div main -->
		</div>
		<!--div layout -->

	</body>
</html>
