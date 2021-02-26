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


/*notification*/

//adding
public function flightname()
		{
			$this->db->select('*');
			$qry=$this->db->get("flight");
			return $qry;

		}
//inserting notification

public function notifymodel($n)
		{
		$this->db->insert("notification",$n);
			
		}		
public function  admin_notify()
		{
		$this->db->select('*');
		$this->db->join('flight','flight.id=notification.f_id','inner');
		$qry=$this->db->get("notification");
		return $qry;
	
		}

		//admin delete:notification
		public function admin_delete($id)
		{
		$this->db->where("n_id",$id);
		$this->db->delete("notification");
		
		}

		//admin update:notification

		public function singledata($id)
		{
			$this->db->select('*');
			$this->db->where("n_id",$id);
			$qry=$this->db->get("notification");
			return $qry;

		}
		public function singleselect()
		{
		$qry=$this->db->get("notification");
		return $qry;
		}

		public function updatedetails($a,$id)
		{
		$this->db->select('*');
		$qry=$this->db->where("n_id",$id);
		$qry=$this->db->update("notification",$a);
		return $qry;
	}

	//ends
	//auto deletion of notification

		public function notidelete($date)
		{
		$this->db->where('cdate<',$date);
		$this->db->delete("notification");
		
		}

/*-------------notification ends------------------------*/

/*-------------flight starts-----------------*/

//flight insert
public function flightregist($a)
{
	
	$this->db->insert("flight",$a);
	
}


//flight view
public function flights()
{
	$this->db->select('*');
	$qry=$this->db->get("flight");
	return $qry;

}
//flight upadte
public function fupdate($id)
	{
		
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->get("flight");
		return $qry;
	}


public function updateflight($a,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("id",$id);
        $qry=$this->db->update("flight",$a);
        return $qry;


	}

public function flightdelete($id)
{
	$this->db->select('*');
    $this->db->where("id",$id);
     $this->db->delete("flight");
}

/*passenger profile  updation start*************/

public function updateform($id)
	{
		$this->db->select('*');
		$qry=$this->db->join("login",'login.id=register.loginid','inner');
		$qry=$this->db->where("register.loginid",$id);
		$qry=$this->db->get("register");
		return $qry;
	}


	public function updates($a,$b,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->join('login','login.id=register.loginid','inner');
        $qry=$this->db->update("register",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


	} 


/*----------------profile updation  ends-------------*/






}
?>