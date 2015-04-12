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
}

?>