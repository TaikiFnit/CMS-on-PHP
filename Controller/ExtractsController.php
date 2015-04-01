<?php

class ExtractsController {
    
    public function __construct() {
        
    }
    
    public function index() {
        // 記事の一覧を引っ張ってきてそれを返す
        require_once('../Model/ExtractsModel.php');
        
        $index = new indexModel();
        
        return $index->execute();
    }
}

?>