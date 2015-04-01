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
}

?>