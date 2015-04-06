<?php

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

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
                        <li role="presentation" class="active"><a href="#news2015" aria-controls="news2015" role="tab" data-toggle="tab">2015年</a></li>    
                        <li role="presentation"><a href="#news2014" aria-controls="news2014" role="tab" data-toggle="tab">2014年</a></li>    
                        <li role="presentation"><a href="#news2013" aria-controls="news2013" role="tab" data-toggle="tab">2013年</a></li>    
                        <li role="presentation"><a href="#news2012" aria-controls="news2012" role="tab" data-toggle="tab">2012年</a></li>
                        <li role="presentetion"><a href="" data-toggle="tooltip-top" title="New Table."><span class="glyphicon glyphicon-plus"></span></a></li>
                    </ul>
                        
                    <div id="tab-content" class="tab-content">
                        
                        <?php
                            // output table contents
                            $fnit = $controller->index_helper();
                            echo $fnit;
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












