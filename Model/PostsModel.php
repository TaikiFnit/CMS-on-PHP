<?php

require_once('mysql.php');

// データベースに記事を挿入するclass
class add extends MySQL{
	private $title;
	private $content;

	public function __construct($t, $c) {
		$this->title = $t;
		$this->content = $c;
	}
    
	public function execute(){

		$dbh = $this->connectDB();

		$sql = "insert into news2(title, content, created, modified) values(:title, :content, now(), now())";
		$stmt = $dbh->prepare($sql);
		$params = array(
			":title" => $this->title,
			":content" => $this->content,
		);

		$stmt->execute($params);
        
        $dbh = null;
    }
}

?>
