<?php

require_once('mysql.php');

// データベースに記事を挿入するclass
class add extends MySQL{
	private $body;
	private $tableName;

	public function __construct($b) {
		$this->body = $b;
		$this->tableName = date("Y", strtotime( $b['date'] ) );
	}
    
	public function execute(){		
		$dbh = $this -> connectDB();

		$sql = "insert into `" . $this -> tableName . "`(title, content, author, created, modified) values(:title, :content, :author, :crated, now())";
		$stmt = $dbh->prepare($sql);
		$params = array(
			":title" => $this -> body['title'],
			":content" => $this -> body['content'],
			":author" => $this -> body['author'],
			":crated" => $this -> body['date']
		);

		$stmt->execute($params);
        
        $dbh = null;
    }
}

?>
