<?php 
include "theme/header.php";
?>

<div class="">
<h1>Variables</h1>

	<div id="body">
		<p><b>What exactly is phpbrowserbox?</b> It is a windows application that features a custom html5 web browser (running on NODE Webkit) and an internally <b>Apache 2.4.20</b> http server, <b>php 7.0.8</b>, <b>mysql 5.7.13</b> with support of NODE.JS in your javaScript application.</p>

		<p>The page you are looking at is being generated dynamically with PHP. This is just a proof of concept that phpbrowserbox 4.0 is now a full LAMP server and supports .htaccess and can run any PHP project.</p>

		<p>This new update simply means that phpbrowserbox is now as powerful as regular windows servers like WAMP, XAMP, EasyPHP. However, this application does not require you to install anything except <b>Microsoft Visual C++ 2015 Redistributable Update 3</b> (PHP 7.0 requirement).</p>
		
		<p>You are presently running phpbrowserbox from:</p>
		<code><?= $base_path ?></code>
		
		
		<p>You might wish to change the splashscreen that shows at the beginning, you need to customize the following file a bit. However, you must note that this file is the main controller of the entire application, if you are not a NODE Webkit Developer, you will be able to a whole lot:</p>
		<code><?= $base_path ?>/webkit/application.html</code>
		
		
		<p>Your apache port is <?= $apache_port ?>, this means that the root of your server is <b>http://localhost:<?= $apache_port ?></b>. To alter this port, checkout the configuration file below and alter the apache_port:</p>
		<code><?= $base_path ?>/core/package.json</code>
		
		<p>Your mysql port is <?= $mysql_port ?>, this means that when you are connecting to mysql, you must use that port number. To alter this port, checkout the configuration file below and alter the apache_port:</p>
		<pre><code>$mysqli = new mysqli("localhost", "root", "", "test","<?= $mysql_port ?>");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
echo 'Connection to MySQLi OK'; 
}</code></pre>

		
		<p>If you would like to edit this page you'll find it located at:</p>
		<code><?= $base_path ?>/httpd/htdocs/variables.php</code>

		<p>If you wish to learn more about phpbrowserbox, then checkout the website for it <a href="http://phpbrowserbox.com">http://phpbrowserbox.com</a>.</p>
	</div>

</div>


<br/>
<?php

include "theme/footer.php";
?>