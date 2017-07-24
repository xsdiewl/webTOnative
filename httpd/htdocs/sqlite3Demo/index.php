<?php 
echo '<base href="../">';
include "../theme/header.php";
?>

<div class="">
<h1>An SQLite3 Demo</h1>
<?php
$db = new SQLite3('mysqlitedb.db');

$results = $db->query('SELECT name FROM foo');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>

</div>
<?php
include "../theme/footer.php";
?>