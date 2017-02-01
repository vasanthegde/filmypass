 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Individual_movie extends CI_Controller {

 
	public function _construct(){
	parent::_construct();
	$this->load->helper('url','form');
	$this->load->library('session','database');
	$this->load->library('encrypt');
 	
}

  public function index()
	{
 			
 		$id =   $this->input->get('name');
 	 $this->load->database('filmypass');
	$this->load->model('movie');
	$data['movie_details'] = $this->movie->get_where($id);
		$data['available_theater'] = $this->movie->get_relation($id);
	//	print_r($data); 


		 $this->load->view('mymovie',$data);

		 }
		 public function Booknow()
		 {
		 	$data['name'] = $this->input->get('name');
		 	$this->load->view('booknow',$data);
		 }



public function add_to_theater()
{
	$data['movie_name'] =   $this->input->get('name');
	$data['movie_id'] =   $this->input->get('movie_id');

	$this->load->view('add_theater',$data);
}


public function subscription()
{
	$this->load->view('subscription');
}

public function payment()
{
	$this->load->view('payment');
}
		}

	 