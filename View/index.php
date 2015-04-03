<?php

require_once('../Controller/ExtractsController.php');

$controller = new ExtractsController();

// $index["news2015"][3]["title"]
// $index[ニュースの年号][ニュースの番号][ニュースの情報]
$index = $controller->index();

?>

	
    <?php
        echo "<ul>";

        foreach($index as $year => $list){
            for($i = 0; $i < count($list); $i++)
            echo "<li>" . $year . " : " . $list[$i]["title"] . "</li>";
        }

        echo "</ul>";
    ?>
	
