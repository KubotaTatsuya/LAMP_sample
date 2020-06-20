<?php

?>
<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'kubota';
$password = '4191121shiba@KTjp';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from sample; ";
	$result = $dbh->query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP TEST PAGE</title>
</head>

<body>
    <div class="container">
        <?php foreach ($result as $value) { ?>
            <?php echo "$value[name]"; ?>
        <?php } ?>
    </div>?>?
</body>

</html>
