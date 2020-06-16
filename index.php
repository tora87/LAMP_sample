<?php
    $dsn = 'mysql:dbname=sample_db;host=localhost;';
    $user = 'toranosuke';
    $password = 'LFO:Nirvash0';
    try {
        $dbh = new PDO($dsn, $user, $password);

        $sql = "select * from sample;";
        $result = $dbh->query($sql);

    } catch (PDOException $e) {
        print "Failed connect: " . $e->getMessage() . "\n";
        exit();
    }
    
    
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP TestPage</title>
</head>
<body>
    <?php foreach($result as $value ){ ?>
        <h1><?php echo "$value[name]<br>";?></h1>
    <?php}?>
    
</body>
</html>