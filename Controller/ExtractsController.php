<?php

require_once('../Model/ExtractsModel.php');

class ExtractsController {
    
    public function __construct() {
        
    }
    
    // 記事の一覧を引っ張ってきてそれを返す
    public function index() {
        
        $index = new indexModel();
        
        return $index->execute();
    }

    public function index_helper($active){

    	$index = $this->index();

    	$active = 2015;

    	$code = "";

    	foreach($index as $year => $list){

            if($year == $active){                    
                $code .= "<div id='news".$year."' class='tab-pane active'>";
            }
            else{
                $code .= "<div id='news".$year."' class='tab-pane'>";
            }
            $code .= "<table role='tabpanel' class='table table-striped'>";
            $code .= "<tbody>";
            $code .= "<tr><th>ID</th><th>Title</th><th>Author</th><th>Created at</th><th>&nbsp;</th></tr>";

            for($i = 0; $i < count($list); $i++){
                $code .= "<tr>";
                for($j = 0; $j < 4; $j++){
                    $code .= "<td>";
                    $code .= $list[$i][$j];
                    $code .= "</td>";
                }
                $code .= "<td>";
                $code .= "<div class='btn-group btn-group-xs col-xs-12' role='group'>
                    <button class='btn btn-default dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>
                    <ul class='dropdown-menu'>
                        <li><a href=''><span class='glyphicon glyphicon-eye-open'></span>View</a></li>
                        <li class='divider'></li>
                        <li><a href=''><span class='glyphicon glyphicon-pencil'></span>Edit</a></li>
                        <li class='divider'></li>
                        <li><a href=''><span class='glyphicon glyphicon-remove'></span>Delete</a></li>
                    </ul>        
                    </div>";
                $code .= "</td>";
                $code .= "</tr>";
            }
            
            $code .= "</tbody>";
            $code .= "</table>";                
            $code .= "</div>";                
        }

        return $code;
    }
}

?>