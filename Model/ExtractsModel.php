<?php

// 将来的にはmysqlの接続関数はクラス化して継承することが好ましいかも

// データベースに記事を挿入するclass
class indexModel{

	public function __construct() {
        require_once('../config.php');
        require_once('mysql.php');
	}
    
    private function fetchTables() {
        
		$dbh = connectDB();

		$sql = "show tables from ".DB_NAME;
		$stmt = $dbh->prepare($sql);

		$stmt->execute();
        
        return $stmt->fetchAll();
    }
    
	public function execute(){
        
        $tables = fetchTables();
        
        $dbh = connectDB();
        
        foreach
        $sql = "select id, title, created from ".$tables;
    }
}


?>