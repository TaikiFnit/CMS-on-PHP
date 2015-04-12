<?php

require_once('mysql.php');

// データベースに記事を挿入するclass
class PostsModel extends MySQL{
	private $tableName;
	private $id;
	private $params;

	public function __construct($body) {

		$this->tableName = date("Y", strtotime( $body['date'] ) );

		$this->id = $body['id'];

		$this->params = array(
			":title" => $body['title'],
			":content" => $body['content'],
			":author" => $body['author'],
			":created" => $body['date']
		);
	}
    
	public function add() {		
		$dbh = $this->connectDB();

		$sql = "insert into `".$this->tableName."`(title, content, author, created, modified) values(:title, :content, :author, :created, now());";

		$stmt = $dbh->prepare($sql);

		$stmt->execute($this->params);
        
        $dbh = null;
    }

	public function edit() {
		$dbh = $this->connectDB();
		
		$sql = "update `".$this->tableName."` set title=:title, content=:content, author=:author, created=:created, modified=now() where id=:id;";
		
		$stmt = $dbh->prepare($sql);

		$this->params[':id'] = $this->id;

		$stmt->execute($this->params);

		$dbh = null;
	}

	public function delete() {

		$dbh = $this->connectDB();

		$sql = "delete from `".$this->tableName."` where id=:id";

		$stmt = $dbh->prepare($sql);

		$stmt->bindParam(":id", $this->id);

		$stmt->execute();

		$dbh = null;
	}
}

?>
