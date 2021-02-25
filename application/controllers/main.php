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
redirect(base_url().'main/flightsearch');
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

/*  passenger view of profile */
public function profile()

{
$this->load->view('passprofile');
}

/* passenger:view flight details*/
public function flight()

{
$this->load->view('flight');
}



}
