<?php

$year = $_GET["year"];
$id = $_GET["id"];

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

$view = $controller->view($year, $id);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Delete</title>        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li class="active">Delete</li>
        </ol>
        
        <div class="row">
            
            <?php
                require_once('./side.php');
            ?>
            
            <div class="col-sm-9 delete">
                <form action="../Controller/PostsController.php" method="POST" class="deleteForm">
                <h2 class="text-danger">Danger!</h2>
            	<p class="text-danger">Are you really sure delete this news?</p>

                <dl class="dl-horizontal">
                    <dt>ID :</dt>
                    <dd><?php echo $view['id']; ?></dd>
                    <dt>Author :</dt>
                    <dd><?php echo $view['author']; ?></dd>
                    <dt>Created :</dt>
                    <dd><?php echo $view['created']; ?></dd>
                    <dt>Title :</dt>
                    <dd><?php echo $view['title']; ?></dd>
                    <dt>Content :</dt>
                    <dd><?php echo $view['content']; ?></dd>
                </dl>

                <div class="form-group" class="row">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="date" value="<?php echo $view['created']; ?>">
                    <input type="hidden" name="id" value="<?php echo $view['id']; ?>">
                    <input type="submit" value="Delete" class="btn btn-danger col-xs-offset-8 col-xs-3">
                </div>
                </form>
            </div>
        </div>
    </main>
    
    <script src="components/jquery/jquery.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="javascripts/control_script.js"></script>
</body>
</html>












