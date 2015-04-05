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
        
            $sql = "select id, title, author, created from `".$tableName["Tables_in_".DB_NAME]."`";
            $stmt = $dbh->prepare($sql);
            
            $stmt->execute();
            
            $table_list[$tableName["Tables_in_".DB_NAME]] = $stmt->fetchAll();        
        }
        
        $dbh = null;
        
        return $table_list;
    }
}

?>