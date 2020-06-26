<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'tora';
$password = 'LFO:Nirvash';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $dbh->prepare($sql);
    $prams = array(':id'=> $id, ':name'=> $name, ':age'=> $age);
    $stmt->execute($prams);
    
    header('Location: index.php?flg=1');

} catch (PDOException $e) {
    header('Location: index.php?flg=2?err='.$e->getMessage());
    exit();
}
?>