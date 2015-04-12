<?php

require_once('../Model/ExtractsModel.php');

class ExtractsController {

    private $model;

    public function __construct(){

        $this->model = new ExtractsModel();
    }
    
    // 記事の一覧を引っ張ってきてそれを返す
    public function index() {

        return $this->model->index();
    }

    // 引数として渡された年、idの記事の情報を返す
    public function view($year, $id) {

        return $this->model->view($year, $id);
    }

    // MySQL classより継承 : DBのTable Listを返す
    public function tables(){

        return $this->model->fetchTables();
    }

    public function tab_helper($active){
        $tables = $this->tables();

        foreach($tables as $table) {
        
            $year = $table["Tables_in_CMS"];

            if($year == $active){
                $code .=  "<li role='presentation' class='active'><a href='#news".$year."' aria-controls='news".$year."' role='tab' data-toggle='tab'>".$year."年</a></li>";                
            } 
            else {
                $code .=  "<li role='presentation'><a href='#news".$year."' aria-controls='news".$year."' role='tab' data-toggle='tab'>".$year."年</a></li>";    
            }
        }

        return $code;
    }

    // controller/View/index.phpのtableを生成するヘルパー関数
    public function table_helper($active){

    	$index = $this->index();

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
                $options = "?year=".$year."&id=".$list[$i]["id"];
                $code .= "<div class='btn-group btn-group-xs col-xs-12' role='group'>
                    <button class='btn btn-default dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>
                    <ul class='dropdown-menu'>
                        <li><a href=''><span class='glyphicon glyphicon-eye-open'></span>View</a></li>
                        <li class='divider'></li>
                        <li><a href='./edit.php".$options."'><span class='glyphicon glyphicon-pencil'></span>Edit</a></li>
                        <li class='divider'></li>
                        <li><a href='./delete.php".$options."'><span class='glyphicon glyphicon-remove'></span>Delete</a></li>
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