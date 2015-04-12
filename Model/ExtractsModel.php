<?php

require_once('mysql.php');

// データベースに記事を挿入するclass
class ExtractsModel extends MySQL{

    public function fetchTables() {
        
        $dbh = $this->connectDB();

        $sql = "show tables from ".DB_NAME;
        $stmt = $dbh->prepare($sql);

        $stmt->execute();
        
        $dbh = null;
        
        return $stmt->fetchAll();
    }

	public function index(){
    
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

    public function view($year, $id){

        $dbh = $this->connectDB();

        $sql = "select * from `".$year."` where id=:id;";
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $dbh = null;

        return $stmt->fetch();
    }
}