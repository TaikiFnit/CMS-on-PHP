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
	<title>Control Panel</title>        
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<h1>CMS</h1>
	
    <form action="http://localhost/control/Controller/PostsController.php" method="POST">
    
        <label for="formTitle">Title:</label>
        <input type="text" name="title" id="formTitle">
        
        <label for="formContent">Content:</label>
        <textarea name="content" id="formContent"></textarea>
        
        <input type="hidden" name="action" value="add">
        
        <input type="submit" value="Send!">
    
    </form>
	
    <?php
        echo "<ul>";

        foreach($index as $year => $list){
            for($i = 0; $i < count($list); $i++)
            echo "<li>" . $year . " : " . $list[$i]["title"] . "</li>";
        }

        echo "</ul>";
    ?>
	
    
</body>
</html>
