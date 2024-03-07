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
	function insert($tbl,$arr)
	{
		//$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment,"created_at"=>$created_at,"updated_at"=>$updated_at);
		
		$col_arr=array_keys($arr);
		$column=implode(",",$col_arr); // name,email,comment,created_at,udated_at
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr); // 'name','email',comment','created_at','udated_at'

		$ins="insert into $tbl ($column) value ('$value')";  // query
		$run=$this->conn->query($ins);  // run on db
		return $run;
	}
	
}
$obj=new model;

?>