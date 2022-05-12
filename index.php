<?php  

	$version = apache_get_version();
	$phpVersion = phpversion();

	$server = $_SERVER['SERVER_NAME'];
	$port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';

//	header("Refresh:10; url=https://www.websparrow.org");

 	echo "<h1>my Web Server @ $server $port </h1>";
	echo "$version";
	echo "<br>";
	echo '<a href="/index.html">index.html</a>';
	echo "<br>";
//	echo "PHP version    : $phpVersion </br>"; 
	echo "<br>";
	echo '<a href="/phpmyadmin">PHPMyAdmin</a>';
	echo "<br>";
	echo '<a href="/info.php">info.php</a>';
	echo "<br>";
	echo "<br>";
	echo "<hr>";

	echo 'Documentation & Guides:';
	echo "<br>";
	echo '<a href="https://www.php.net/docs.php" target="_blank">PHP</a>';
	echo "<br>";
	echo '<a href="http://localhost/phpmyadmin/doc/html/index.html" target="_blank">PhpMyAdmin</a>';
	echo "<br>";
	echo '<a href="https://httpd.apache.org/docs/" target="_blank">Apache</a>';
	echo "<br>";
	echo '<a href="https://www.websparrow.org/misc/how-to-install-apache-2-4-and-php-8-on-a-windows-machine" target="_blank">www.websparrow.org</a>';
	echo "<br>";
	echo '<a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a>';
	echo "<br>";
 
 ?>