<?php

// データベースに記事を挿入するclass
class add {
	private $title;
	private $content;

	public function __construct($t, $c) {
		$this->title = $t;
		$this->content = $c;
	}
    
	public function execute(){
		require_once('mysql.php');

		$dbh = connectDB();

		$sql = "insert into news(title, content, created, modified) values(:title, :content, now(), now())";
		$stmt = $dbh->prepare($sql);
		$params = array(
			":title" => $this->title,
			":content" => $this->content,
		);

		$stmt->execute($params);
    }
}

?>
