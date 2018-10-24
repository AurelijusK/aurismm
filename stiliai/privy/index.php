<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php header_info(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="default-kopija.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="https://g2.dcdn.lt/images/pix/file263551_delfi.jpg" width='100px'  height='100px' alt="" />
			<h1><a href="<?php echo adresas(); ?>">|||</a></h1>
			<span><a href="<?php echo adresas(); ?>" rel="nofollow">PRADŽIA</a></span>
		</div>
		<div id="menu">
		<ul>

			<?php

				$limit = 6; //Kiek nuorodų rodome

				$menuSql  = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `parent` = 0 AND `show` = 'Y' AND `lang` = " . escape(lang()) . " ORDER BY `place` ASC LIMIT " . $limit );

			?>

			<?php foreach ($menuSql as $menuRow) { ?>

				<?php if (teises( $menuRow['teises'], $_SESSION[SLAPTAS]['level'])){ ?>

					<li>

						<a href="<?php echo url('?id,' . (int)$menuRow['id']); ?>">

							<?php echo input($menuRow['pavadinimas']); ?>

						</a>

					</li>

				<?php } ?>

			<?php } ?>

			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
			<h1>TU TURI TAI ŽINOTI</h1></br>
			<img src="https://g3.dcdn.lt/images/pix/delfi-pagrindinis-78221755.jpg" width='500px'   alt="" />
				
				<span class="byline"></span>
			</div>
			<!-- <p>This is <strong>Privy</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p> -->
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
		<div id="featured">
			<div class="title">
				<!-- <h2>Maecenas lectus sapien</h2>
				<span class="byline">Integer sit amet aliquet pretium</span> -->
			</div>
			<ul class="style1">
				<li class="first">
				<?php

				if ( isset( $strError ) && !empty( $strError ) ) {

					klaida( "Klaida", $strError );

				}

				

				include ( $page . ".php" );
				?>	
				</br>
				<?php
				include ( "priedai/centro_blokai.php" );

				?>			
				</li>
			</ul>
		</div>
		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Photos by <a href="http://delfi.lt/">DELFI</a></span>
			<!-- <span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</span> -->
		</div>
	</div>
</div>
</body>
</html>
