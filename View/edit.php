<?php

$id = $_GET["id"];
$year = $_GET["year"];

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

$view = $controller->view($year, $id);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Edit</title>        
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
            <li class="active">Add</li>
        </ol>
        
        <div class="row">
            <?php
                require_once('./side.php');
            ?>
            
            <div class="col-sm-9">
        
                <form action="../Controller/PostsController.php" method="POST">
                    <div class="form-group">
                        <label for="formTitle">Title:</label>
                        <input type="text" name="title" id="formTitle" class="form-control" placeholder="Title" value="<?php echo $view['title']; ?>">
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-6">
	                        <label for="formAuthor">Author:</label>
	                        <input type="text" name="author" id="formAuthor" class="form-control" placeholder="Author" value="<?php echo $view['author']; ?>">
                        </div>
                        <div class="form-group col-xs-6">
	                        <label for="formDate">Date:</label>
	                        <input type="date" name="date" id="formDate" class="form-control" value="<?php echo $view['created']; ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="formContent">Content:</label>
                        <textarea name="content" id="formContent" class="form-control" rows="15"><?php echo $view['content']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="year" value="<?php echo $year; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="update!" class="btn btn-primary">
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
