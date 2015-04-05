<?php

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

// $index["news2015"][3]["title"]
// $index[ニュースの年号][ニュースの番号][ニュースの情報]
$index = $controller->index();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Add</title>        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="stylesheets/control_style.css">
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
</head>
<body id="body">
    
    <?php
        require_once('./header.php');
    ?>
    
    <main role="main" class="container">
        
        <ol class="breadcrumb">
            <li><a href="./index.php">Index</a></li>
            <li class="active">Add</li>
        </ol>
        
        <div class="row">
            <?php
                require_once('./side.php');
            ?>
            
            <div class="col-sm-9">
        
                <form action="http://localhost/control/Controller/PostsController.php" method="POST" class="">
                    <div class="form-group">
                        <input type="text" name="title" id="formTitle" class="form-control" placeholder="Title">
                    </div>
                    
                    <div class="form-group">
                        <label for="formContent">Content:</label>
                        <textarea name="content" id="formContent" class="form-control" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="action" value="add">
                        <input type="submit" value="Send!" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <script src="components/jquery/jquery.js"></script>
    <script src="components/jquery-ui/jquery-ui.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="javascripts/control_script.js"></script>
</body>
</html>
