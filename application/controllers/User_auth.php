 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_auth extends CI_Controller {

 
	public function _construct(){
	parent::_construct();
	$this->load->helper('url','form');
	$this->load->library('session','database');
	$this->load->library('encrypt');
 	
}

  public function index()
	{
 			
 		$this->load->database('filmypass');
		$this->load->model('login_model');
		$this->session->set_userdata('secure_login_flag', 0);
		 

		require_once (APPPATH.'libraries/Google/autoload.php');

		//REGISTERD KEYS FROM GOOGLE DEVELOPER WEBSITE
		$client_id = '449154812137-mngvc3vor81m0sg7j5rcqkudm9eleke3.apps.googleusercontent.com'; 
		$client_secret = 'tjlzSzAd-Eik58lpgCEWOm9B';
		$redirect_uri = 'http://localhost/filmypass/';


		$client = new Google_Client();
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->addScope("email");
		$client->addScope("profile");
		$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email',
        'https://www.googleapis.com/auth/plus.me'));    

		$service = new Google_Service_Oauth2($client);

		if(!isset($_GET['code']))
		{

			$authUrl = $client->createAuthUrl();
			$data['authUrl'] = $authUrl;
			$_SESSION['access_token'] = $client->getAccessToken();
			//REDIRECTING TO LOGIN PAGE
			$this->load->view('login',$data);

 		}
 
 		else
 		{
			//VERIFICATION OF USER GOOGLE ID
		  	$client->authenticate($_GET['code']);
		  	$user = $service->userinfo->get();
			//SETTING UP THE SESSION DATA
			  	$user_info = array(
			  	'user_name' 	=> $user->name,
			  	'email' 		=> $user->email,
			  	'google_id' 	=> $user->id,
			  	'profile_pic' 	=> $user->picture
		 		);
		    $this->session->set_userdata($user_info);
		    //CHECK WHETER USER IS NEW OR NOT
		    $is_new_user = $this->login_model->is_new();

		 	if(!$is_new_user)
		 	{
		 		//NEW USER
		 		//SETTING UP THE SECURE LOGIN FLAG
				$this->session->set_userdata('secure_login_flag', 1);
	 		    redirect('http://localhost/filmypass/index.php/User_auth/new_user');

		 	}

		 	else
		 	{   // ALREADY REGISTERD 
		 		//print_r($is_new_user[0]);

		 		$user_name = $is_new_user[0]['user_name'];
		 	 
		 		$this->session->set_userdata('user_name', $user_name);

			 	$this->session->set_userdata('secure_login_flag', 1);
				redirect('http://localhost/filmypass/index.php/User_auth/Inside_home');

		 	}

		}
	
	}


 
   public function Inside_home()
	{

		$this->load->model('movie');
		$data['movie_info'] = $this->movie->get_movie_info();
		
		$this->load->view('after_login',$data);
	}


   public function logout()
	{
		$this->session->set_userdata('secure_login_flag', 0);
		unset($_SESSION['access_token']);
		header('Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/filmypass/');

		//redirect('http://localhost/filmypass/');
	}


public function new_user()

{
	$this->load->view('get_info_from_new_user');
}


 public function set_password()
 {			

 
			$user_name = $this->input->post('user_name');
			$this->session->set_userdata('user_name', $user_name);


 

		$this->load->database('filmypass');
		$this->load->model('login_model');
		 $this->login_model->register_user();
	 	redirect('http://localhost/filmypass/index.php/User_auth/Inside_home');


 }

public function check_password()
{

	//$this->load->library('encrypt');
	
	$password = $this->input->post('pwd');
	//$en_pwd = $this->encrypt->encode($password);

	$this->load->database('filmypass');
	$this->load->model('login_model');

	$valid = $this->login_model->check_login($password);
if($valid == true)
{
$this->session->set_userdata('secure_login_flag', 1);
redirect('http://localhost/filmypass/index.php/User_auth/Inside_home');

}
else
{
	  redirect('http://localhost/filmypass/index.php/User_auth/');


}

}



}