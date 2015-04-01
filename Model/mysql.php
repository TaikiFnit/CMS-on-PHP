<?php

require_once('../config.php');

class MySQL {

    public function connectDB() {

        try{
            return new PDO(DSN, DB_USER, DB_PASSWORD);   
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
    
    protected function fetchTables() {
        
        $dbh = $this->connectDB();

		$sql = "show tables from ".DB_NAME;
		$stmt = $dbh->prepare($sql);

		$stmt->execute();
        
        $dbh = null;
        
        return $stmt->fetchAll();
    }
}