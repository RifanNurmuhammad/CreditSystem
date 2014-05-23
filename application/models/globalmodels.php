<?php
class globalmodels extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function selectOne($field, $table, $condition="")
	{
		$query	=	"SELECT ".$field." FROM ".$table." ".$condition."";
		$result = 	$this->db->query($query);
		return $result->row_array();
	}
	
	public function selectMultiple($field, $table, $condition="")
	{
		$query	=	"SELECT ".$field." FROM ".$table." ".$condition."";
		$result = 	$this->db->query($query);
		return $result->result_array();
	}
	
	public function update($table, $condition)
	{
		$setUpdate		=	array();
		foreach ($this->data as $key=>$value) {
			$setUpdate[]	=	$key." = '".$value."'";
		}
		$setUpdate		=	join(",", $setUpdate);
		$prepare		=	"UPDATE ".$table." SET ".$setUpdate." ".$condition."";
		$query 			=	$this->db->query($prepare);
		return $query;
	}
	
	public function insert($table)
	{
		$setUpdate		=	array();
		foreach ($this->data as $key=>$value) {
			$setUpdate[]	=	$key." = '".$value."'";
		}
		$setUpdate		=	join(",", $setUpdate);
		$prepare		=	"INSERT INTO ".$table." SET ".$setUpdate."";
		$query 			=	$this->db->query($prepare);
		return $query;
	}
	
	public function delete($table, $condition="")
	{
		$result	=	$this->db->query("DELETE FROM ".$table." ".$condition."");
		return $result;
	}

	public function insertID()
	{
		return $this->db->insert_id();
	}

	public function dbNOW()
	{
		$result	=	"NOW()";
		return $result;
	}
	
}