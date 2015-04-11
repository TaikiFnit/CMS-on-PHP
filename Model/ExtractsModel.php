<?php

require_once('mysql.php');

// データベースに記事を挿入するclass
class indexModel extends MySQL{

	public function __construct() {

	}
    
	public function execute(){
    
        $dbh = $this->connectDB();
        
        $tables = $this->fetchTables();
        
        foreach($tables as $tableName){

            $tn = $tableName["Tables_in_".DB_NAME];

            $sql = "select id, title, author, created from `" . $tn . "`";

            $stmt = $dbh->prepare($sql);

            $stmt->execute();
            
            $table_list[$tn] = $stmt->fetchAll();        
        }

        $dbh = null;
        
        return $table_list;
    }
}

class viewModel extends MySQL{

    private $year;
    private $id;

    public function __construct($y, $i) {
        $this->year = $y;
        $this->id = $i;
    }

    public function execute() {
        $dbh = $this->connectDB();

        $sql = "select * from `".$this->year."` where id=:id;";
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':id', $this->id);

        $stmt->execute();

        return $stmt->fetch();
    }
}

?>