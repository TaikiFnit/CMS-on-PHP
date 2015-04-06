<?php
/*
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
*/
?>

<?php



?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Login</title>        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/control_style.css">
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
</head>
<body id="body">
    
    <header id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">  
                <div class="row">
                <div class="col-xs-8">
                <a href="./index.php">
                    <h1>IRC Control Panel</h1>
                </a>
                </div>
                </div>
            </div>        
        </nav>
    </header>
    
    <main role="main" class="container">  
        
    <form class="form-horizontal" action="../Controller/AuthenticationController.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name</label>
            <div class="col-sm-8">
               <input id="name" class="form-control" name="name" type="text" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password</label>
            <div class="col-sm-8">
                <input id="passowrd" class="form-control" type="password" name="password"  placeholder="Password" aria-describedby="inputError2Status">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
               <button type="submit" id="send" class="btn btn-primary">Send!</button>
            </div>
        </div>
    </form>
        
    </main>
    
    <script src="components/jquery/jquery.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="javascripts/control_script.js"></script>
</body>
</html>