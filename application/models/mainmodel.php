<?php
class mainmodel extends CI_model
{

public function encpassword($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
	}


public function register($a,$b)
{
	
	$this->db->insert("login",$b);
	$logid=$this->db->insert_id();
	$a['loginid']=$logid;
	$this->db->insert("register",$a);
	
}

//login start
public function slctpass($em,$pass)
{
$this->db->select('password');
$this->db->from("login");
$this->db->where("email",$em);
$qry=$this->db->get()->row('password');
return $this->verfypass($pass,$qry);
}
public function verfypass($pass,$qry)
{
return password_verify($pass,$qry);
}
public function getusrid($em)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("email",$em);
return $this->db->get()->row('id');
}
public function getusr($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this->db->get()->row();
}



}
?>