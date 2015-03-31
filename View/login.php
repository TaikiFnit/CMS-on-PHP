<?php

// connnect db
try {

	// database handler
	$dbh = new PDO('mysql:host=localhost;dbname=CMS', 'root', 'fni3179935');
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}

echo "success!";

//処理
$sql = "select * from news;";
$stmt = $dbh->query($sql);
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $value) {
	var_dump($value);
}

// 切断
$dbh = null;

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        
    </head>
    <body>
    
    </body>
</html>
