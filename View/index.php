<?php

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

// $index["news2015"][3]["title"]
// $index[ニュースの年号][ニュースの番号][ニュースの情報]
$index = $controller->index();

$active = 2015;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Control Panel - Index</title>        
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

            foreach($index as $year => $list){
                
                if($year == $active){                    
                    echo "<div id='news".$year."' class='tab-pane active'>\n";
                }
                else{
                    echo "<div id='news".$year."' class='tab-pane'>\n";
                }
                echo "<table role='tabpanel' class='table table-striped'>\n";
                echo "<tbody>\n";
                echo "<tr>\n<th>ID</th>\n<th>Title</th>\n<th>Author</th>\n<th>Created at</th>\n<th>&nbsp;</th>\n</tr>\n";
             
                for($i = 0; $i < count($list); $i++){
                    echo "<tr>\n";
                    for($j = 0; $j < 4; $j++){
                        echo "<td>";
                        echo $list[$i][$j];
                        echo "</td>\n";
                    }
                    echo "<td>\n";
                    echo "<div class='btn-group btn-group-xs col-xs-12' role='group'>\n
                        <button class='btn btn-default dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>\n
                        <ul class='dropdown-menu'>\n
                            <li><a href=''><span class='glyphicon glyphicon-eye-open'></span>View</a></li>\n
                            <li class='divider'></li>
                            <li><a href=''><span class='glyphicon glyphicon-pencil'></span>Edit</a></li>\n
                            <li class='divider'></li>\n
                            <li><a href=''><span class='glyphicon glyphicon-remove'></span>Delete</a></li>\n
                        </ul>\n        
                        </div>\n";
                    echo "</td>\n";
                    echo "</tr>\n";
                }
                
                echo "</tbody>\n";
                echo "</table>\n";                
                echo "</div>\n";                
            }
            
        
            ?>
	
            </div>
            </section>
            
        </div>
    </main>
    
    <script src="components/jquery/jquery.js"></script>
    <script src="components/jquery-ui/jquery-ui.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="javascripts/control_script.js"></script>
</body>
</html>












