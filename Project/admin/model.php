<?php

class model
{
	public $conn="";
	
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','php28db');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // run on db
		while($fetch=$run->fetch_object()) // fetch all data from database
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
}
$obj=new model;

?>