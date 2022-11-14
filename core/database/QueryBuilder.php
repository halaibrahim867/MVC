<?php

namespace core\database;

use PDOException;

class QueryBuilder{
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function insert($table, $params){
        $sql=sprintf(
            "insert into %s (%s) values (%s)",
            $table,
            implode(',',array_keys($params)),
            ':'.implode(',:', array_keys($params))
        );
       try{
        $statment=$this->pdo->prepare($sql);
        $statment->execute($params);
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
}