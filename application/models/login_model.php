<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    $this->load->database();
    }


public function is_new()
{
	$email= $this->session->userdata('email');
 	$query= $this->db->get_where('user',array('email' =>$email));

	if($query->num_rows == 1)
		{ 
			return $query->result_array();
		}

		else
		{
		return 0; 
		}
}

public function register_user($en_pwd)
{
	$phone  = $this->input->post('phone');
	$location = $this->input->post('location');
	$user_name = $this->input->post('user_name');
		$password = $this->input->post('pwd');

	$data = array(
		'email' => $this->session->userdata('email'),
		'user_name' =>  $user_name,
		'profile_pic' => $this->session->userdata('profile_pic'),
		'google_id' => $this->session->userdata('google_id'),
		'phone' =>$phone,
		'location' => $location,
		'password' => $password
		);

	$query = $this->db->insert('user',$data);
}

public function check_login($en_pwd)
{
	$email = $this->input->post('email');

	$query = $this->db->get_where('user',array('email'=>$email, 'password' =>$en_pwd));
if($query->num_rows == 1)
	{ return true;}
else
	{ return false; }
}

 

}