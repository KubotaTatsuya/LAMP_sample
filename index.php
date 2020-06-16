<?php

?>
<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'otsubo';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from sample; ";
	$result = $dbh->query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

?>
