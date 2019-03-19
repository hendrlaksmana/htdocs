<?php
include ('inc/config.php');
?>
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
						<?php
$sql="select idpage,judul from page order by idpage";
$rs=mysql_query($sql) or die(mysql_error());
while ($page=mysql_fetch_object($rs)){
						?>
						<li class=" ">
							<a href="index.php?idpage=<?=$page->idpage?>"><?=$page->judul?></a>
						</li>
						<?php } ?>
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
                    $idpage = '1';
                    if (isset($_GET['idpage'])) {
                        $idpage = $_GET['idpage'];
                    }
                    $sql = "select * from page where idpage='$idpage' ";
                    $rs = mysql_query($sql) or die(mysql_error());
                    while ($page = mysql_fetch_object($rs)) {
                        echo "<h1>".$page -> judul."</h2>";
                        echo $page -> isi;
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
