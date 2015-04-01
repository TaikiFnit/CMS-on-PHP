<?php

// データベースに記事を挿入するclass
class index {

	public function __construct() {
        
	}
    
	public function execute(){
		require_once('mysql.php');

		$dbh = connectDB();

		$sql = "show tables from ".DB_NAME;
		$stmt = $dbh->prepare();
		$params = array(
			":title" => $this->title,
			":content" => $this->content,
		);

		$stmt->execute($params);
    }
}


?>