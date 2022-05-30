<html>

<head>
   <!- head elements (Meta, title, etc) -->

      <!-- Link your php/css file -->
      <link rel="stylesheet" href="style.php" media="screen">
      <link rel="icon" href="/resources/favicon-apache.png" type="image/x-icon">
</head>

<?php  

	$version = apache_get_version();
	$phpVersion = phpversion();

	$server = $_SERVER['SERVER_NAME'];
	$port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';

 	echo "<h1>my Web Server @ $server $port </h1>";
	echo "<h4>This site is running $version </h4>";
	echo "<br>";
	echo "<br>";
	// echo '<h4><a href="/projects/index.php" target="projects">My Projects</a>';
	echo '<h4><a href="/projects/index.php">My Projects</a>';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo '<a href="/phpmyadmin" target="_blank">PHPMyAdmin</a></h4>';
	echo "<br>";
	echo "<br>";
	echo "<hr>";
	echo '<h4> <a href="/index.html" target="testpage">Apache Test Page</a> ';
		echo "<br>";
		// echo "PHP version : $phpVersion </br>";
		echo '<a href="/info.php" target="testpage">PHP Info</a> </h4>';
	echo "<br>";

	echo 'Documentation & Guides: (opens in new windows)';
	echo "<br>";
	echo '<a href="https://www.php.net/docs.php" target="_blank">php.net/docs</a>';
	echo "<br>";
	echo '<a href="http://localhost/phpmyadmin/doc/html/index.html" target="_blank">phpmyadmin/docs</a>';
	echo "<br>";
	echo '<a href="https://httpd.apache.org/docs/" target="_blank">apache.org/docs</a>';
	echo "<br>";
	echo '<a href="https://www.websparrow.org/misc/how-to-install-apache-2-4-and-php-8-on-a-windows-machine"
		target="_blank">websparrow.org/how_to</a>';
	echo "<br>";
	echo '<a href="https://getcomposer.org/doc/00-intro.md" target="_blank">composer.org/docs</a>';
	echo "<br>";
	echo "<br>";
?>

<div style="display: flex; justify-content: center; ">
   <iframe name="testpage" src="/index.html" width="80%" height="300" loading="lazy" style="border:none;"></iframe>
</div>

</html>