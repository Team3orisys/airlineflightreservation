<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}



	public function register()

{
	$this->load->view('register');
}

public function registration()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","fname",'required');
		$this->form_validation->set_rules("lname","lname",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("phno","Phonenumber",'required');
		$this->form_validation->set_rules("email","Email",'required');
		$this->form_validation->set_rules("password","password",'required');
		
		
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$encpass=$this->mainmodel->encpassword($pass);
		$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"age"=>$this->input->post("age"),
			"gender"=>$this->input->post("gender"),
			"address"=>$this->input->post("address"),
			"district"=>$this->input->post("district"),
			"phno"=>$this->input->post("phno"));
		$b=array("email"=>$this->input->post("email"),
			"password"=>$encpass,'utype'=>'1');
		
		$this->mainmodel->register($a,$b);
		redirect(base_url().'main/register');

	    }

}

//login start

public function login()
{
$this->load->view('login');
}
public function new_login()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{
$this->load->model('mainmodel');
$em=$this->input->post("email");
$pass=$this->input->post("password");
$rslt=$this->mainmodel->slctpass($em,$pass);

if ($rslt)
{
$id=$this->mainmodel->getusrid($em);
$user=$this->mainmodel->getusr($id);
$this->load->library(array('session'));
$this->session->set_userdata(array('id'=>(int)$user->id,'utype'=>$user->utype));
if($_SESSION['utype']=='0')
{
redirect(base_url().'main/admin');
}

elseif ($_SESSION['utype']=='1')
{
redirect(base_url().'main/passenger');
}

    }
    else
    {
    echo "invalid user";
    }
}
else
{
redirect('main/login','refresh');
}
}
public function flightsearch()
{
$this->load->view('flightsearch');
}

//login ends

/*passenger home page*/
public function passenger()

{
$this->load->view('passenger');
}

/*  passenger view of profile  for updation*/
public function passprofile()

{

		
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->mainmodel->updateform($id);
		$this->load->view('passprofile',$data);

	}
	public function updatedetails1()
	{
		$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"age"=>$this->input->post("age"),
			"gender"=>$this->input->post("gender"),
			"address"=>$this->input->post("address"),
			"district"=>$this->input->post("district"),
			"phno"=>$this->input->post("phno"));
		$b=array("email"=>$this->input->post("email"));
		$this->load->model('mainmodel');
		
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->mainmodel->updates($a,$b,$id);
			redirect('main/passprofile','refresh');
		}

	}


/* passenger:view flight details*/
// public function flightsss()

// {
// $this->load->view('flight');
// }

//passenger ::ends

/*************notification*******************/

//admin adding notification
public function notification()

{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->flightname();
		$this->load->view('notification',$data); 
}

//action
public function notify_action()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("noti","notification",'required')
		;


		

		if($this->form_validation->run())
		{

			
			$this->load->model('mainmodel');

			$n=array("notification"=>$this->input->post("noti"),"f_id"=>$this->input->post("flight"),"cdate"=>date('y-m-d'));

			$this->mainmodel->notifymodel($n);
			redirect('main/notification','refresh');
		}	
	}

//insertion of notification ends

//admin view of notification	

	public function notiadmin()
	{
		
		$this->load->model('mainmodel');
		$date=date('y-m-d');// for auto delete of notification
 		$this->mainmodel->notidelete($date);
		$data['n']=$this->mainmodel->admin_notify();
		$this->load->view('admin_notify_view',$data);

	}

	/*notification:admin delete*/
	public function notify_delete()
	{
		$id=$this->uri->segment(3);
		$this->load->model('mainmodel');
		$this->mainmodel->admin_delete($id);
		redirect('main/notiadmin','refresh');
	}

	/*notification :admin update*/

	public function admin_update()
	{
		
		$a=array("notification"=>$this->input->post("noti"));
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);

		$data['user_data']=$this->mainmodel->singledata($id);
		$this->mainmodel->singleselect();
		$this->load->view('update_noti_view',$data);
		if($this->input->post("update"))
		{
			$this->mainmodel->updatedetails($a,$this->input->post("id"));
			redirect('main/notiadmin','refresh');
		}
	}

	
 
/*------------------notification ends-----------------*/


/*admin home page*/
public function admin()

{
$this->load->view('admin');
}

/* ------------ filght -------------------------------*/


public function flights()
{
	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->flights();
	$this->load->view('flight',$data);
}

public function flightreg()

{
	$this->load->view('flightreg');
}
 public function flight()
 {

 	$this->load->library('form_validation');
		$this->form_validation->set_rules("airlinename","airlinename",'required');
		$this->form_validation->set_rules("departure","departure",'required');
		$this->form_validation->set_rules("arrival","arrival",'required');
		$this->form_validation->set_rules("date","date",'required');
		$this->form_validation->set_rules("dtime","dtime",'required');
		$this->form_validation->set_rules("atime","atime",'required');
		$this->form_validation->set_rules("cost","cost",'required');
		$this->form_validation->set_rules("seatcapacity","seatcapacity",'required');
		$this->form_validation->set_rules("business","business",'required');
		$this->form_validation->set_rules("economy","economy",'required');
		$this->form_validation->set_rules("first","first",'required');
		
		
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
		$a=array("airlinename"=>$this->input->post("airlinename"),
			"departure"=>$this->input->post("departure"),
			"arrival"=>$this->input->post("arrival"),
			"date"=>$this->input->post("date"),
			"dtime"=>$this->input->post("dtime"),
			"atime"=>$this->input->post("atime"),
			"cost"=>$this->input->post("cost"),
			"seatcapacity"=>$this->input->post("seatcapacity"),
			"business"=>$this->input->post("business"),
			"economy"=>$this->input->post("economy"),
			"first"=>$this->input->post("first"));
			$this->mainmodel->flightregist($a);
			redirect(base_url().'main/flightreg');
		
		

	    }


 }




public function updateflight()
{
	$this->load->model('mainmodel');
	$id=$this->session->id;
	$data['user_data']=$this->mainmodel->fupdate($id);
	$this->load->view('updateflight',$data);
}


public function flightupdate()
	{
		$a=array("airlinename"=>$this->input->post("airlinename"),
			"departure"=>$this->input->post("departure"),
			"arrival"=>$this->input->post("arrival"),
			"date"=>$this->input->post("date"),
			"dtime"=>$this->input->post("dtime"),
			"atime"=>$this->input->post("atime"),
			"cost"=>$this->input->post("cost"),
			"seatcapacity"=>$this->input->post("seatcapacity"),
			"business"=>$this->input->post("business"),
			"economy"=>$this->input->post("economy"),
			"first"=>$this->input->post("first"));
			$this->load->model('mainmodel');
		
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->mainmodel->updateflight($a,$id);
			redirect('main/updateflight','refresh');
		}

	}

 	public function deleteflight()
 	{
 		$id=$this->session->id;
 		$this->load->model('mainmodel');
		$this->mainmodel->flightdelete($id);
 	}







}
