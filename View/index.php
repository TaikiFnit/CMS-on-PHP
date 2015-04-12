<?php

require_once('../Controller/ExtractsController.php');

///$controller = new ExtractsController();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Index</title>        
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
            <li>Index</li>
            <li class="active">&nbsp;</li>
        </ol>
        
        <div class="row">
            
            <?php
                require_once('./side.php');
            ?>
            
            <div class="col-sm-9">
                
                <div role="tabpanel">
                        
                    <ul id="tab" class="nav nav-tabs" role="tablist">
                        <?php
                            //echo $controller->tab_helper(2015);
                        ?>
                    </ul>
                        
                    <div id="tab-content" class="tab-content">
                        
                        <?php
                            // output table contents
                            //echo $controller->table_helper(2015);
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="components/jquery/jquery.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="javascripts/control_script.js"></script>
</body>
</html>












