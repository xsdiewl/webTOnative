<?php 
include "theme/header.php";
?>

<div class="">
<h1>Testing MySQL Config</h1>
<?php
$mysql_port=$package->mysql_port;

$mysqli = new mysqli("localhost", "root", "", "test","$mysql_port");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s<br/>", mysqli_connect_error());
    exit();
} else {
echo '***Connection to MySQLi OK'."<br/>"; 
}
echo "************Testing Completed************************<br/>";
?> 
<br/>
$mysqli = new mysqli("localhost", "root", "", "test","<?= $mysql_port ?>");<br/>
if (mysqli_connect_errno()) {<br/>
    printf("Connect failed: %s\n", mysqli_connect_error());<br/>
    exit();<br/>
} else {<br/>
echo 'Connection to MySQLi OK'; <br/>
}<br/>
<br/>
<?php
echo "</pre></div>";

include "theme/footer.php";
?>