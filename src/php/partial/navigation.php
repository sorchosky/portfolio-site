<!-- Overlay nav -->
<div class="overlay-container" id="myNav">
	<a onclick="closeNav()"><i class="fa fa-close"></i></a>
	<div class="overlay">
		<ul class="overlay-nav" id="myNavText">
			<li class="overlay-nav__item"><a href="biltmore_forest.php">Biltmore Forest Country Club</a></li>
			<li class="overlay-nav__item"><a href="tempur-pedic-landing-pages.php">Tempur-Pedic Landing Pages</a></li>
			<li class="overlay-nav__item"><a href="release.php">Release</a></li>
		</ul>
	</div>
</div>

<?php
// Get current page
	$page = basename($_SERVER['PHP_SELF']);
// Project array
$projects = array(
	"tempur-pedic-landing-pages.php",
	"release.php",
	"biltmore_forest.php"
);
?>

<!-- Site Navigation -->
<nav class="reveal">
	<a href="index.php" class="logo">
	  <img src="img/SVG/logo-white.svg" srcset="img/2x/logo-white@2x.png 1x, img/SVG/logo-white.svg 1.5x" alt="Steve Orchosky">
	</a>

	<ul>
	  <li><a class="nav-link <?php echo ($page == "about.php" ? "active" : "")?>"  href="about.php">About</a></li>
	  <li><a class="nav-link <?php echo ($page == "illustration.php" ? "active" : "")?>" href="illustration.php">Illustration</a></li>
	  <li><a class="nav-link <?php if (in_array($page, $projects)) {echo "active";}?>" id="projects" onclick="openNav()">Projects</a></li>
	</ul>
</nav>