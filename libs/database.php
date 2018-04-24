<?php

class Database {
    
    private $db;
    private $table;

    public function __construct($table){
        $conf = require_once('/config/config.php');
        $this->db = $conf->db;
        $this->table = (string) $table;
    }

    public function isConnectionSuccess(){
        return !$this->db->connect_error;
    }

    public function findAll()
    {
        $query = $this->isConnectionSuccess() ? $this->db->query('select * from $table order by id desc') : false;
        return $this->resultset();
    }

    public function findById($id)
    {
        $query = $this->isConnectionSuccess() ? $this->db->query('select * from $table where id='."'".$id."'") : false;
        return $this->resultset();
    }

    public function findByCriteria($filter)
    {
        $query = $this->isConnectionSuccess() ? $this->db->query('select * from $table where '.$criteria) : false;
        return $this->resultset();
    }

    public function findByCriteriaOrdered($filter, $order)
    {
        $query = $this->isConnectionSuccess() ? $this->db->query('select * from $table where '.$criteria.'order by $order') : false;
        return $this->resultset();
    }

    public function insert($fields, $values)
    {
        $query = $this->isConnectionSuccess() ? $this->db->query('insert into $table ($fields) values('.$values.')') : false;
        //$num_rows = $query ? $query->insert_id : 0
        return;
    }

    public function update($fieldsAndValues, $id){
        $query = $this->isConnectionSuccess() ? $this->db->query('update $table set $fieldsAndValues where id='."'".$id."'") : false;
        //$num_rows = $query ? $query->affected_rows : 0;
        return;
    }

    public function delete($id){
         $query = $this->isConnectionSuccess() ? $this->db->query('delete from $table where id='."'".$id."'") : false;
         //$num_rows = $query ? $query->affected_rows : 0;
         return;
    }

    private function resultset($query){
        $resultset[] = array();
        if($query) {
            while($row = $query->fetch_object()) 
            {
                array_push($resultset,$row);
            }
        } 
        return $resultset;
    }
}
?>