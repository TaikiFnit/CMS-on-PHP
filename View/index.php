<?php

$newslist[][];


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
	
	
    
</body>
</html>
