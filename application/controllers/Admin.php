 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

 
	public function _construct(){
	parent::_construct();
	$this->load->helper('url','form');
	$this->load->library('session','database');
	$this->load->library('encrypt');
 	
}

  public function index()
	{
 			
 		 
		$this->load->view('insert_movie');
		 
		 

		 }

		 public function insert_movie()

	{
	$movie_name = $this->input->post('movie_name');
	$this->load->database('filmypass');
	$this->load->model('movie');
	//$this->movie->insert();

$url = file_get_contents("http://www.omdbapi.com/?t='$movie_name'&y=&plot=Full&r=json");
$json = json_decode($url, true); //This will convert it to an array
$response =  $json['Response'];
 
if($response == 'False')
{
$data['no_movie'] = "Oops movie not found..!";
	$this->load->view('insert_movie',$data);
}

else{
$movie_title = $json['Title'];
$movie_year = $json['Year'];
$released 	=  $json['Released'];
$director	=	$json['Director'];
$plot 		= 	$json['Plot'];
$language 	= $json['Language'];
$poster 	= 	$json['Poster'];
$rating		=		$json['imdbRating'];
$Actors = $json['Actors'];

$insert_data = array(
	'name' =>$movie_title,
	'plot' =>$plot,
	'rating' =>$rating,
	'poster' =>$poster,
	'language' =>$language,
	'director' =>$director,
	'year' =>  $movie_year,
	'Actors' => $Actors
	);
 $this->movie->insert_movie_info($insert_data);

 $data['success'] = $movie_title." is successfully added..!";
 $this->load->view('insert_movie',$data);
	}
}
public function add_theater()

{
	$t_name = $this->input->post('theater_name');
	$this->load->database('filmypass');
	$this->load->model('movie');
	$this->movie->insert_theater();
	 $data['added_theater'] = $t_name." is successfully added..!";
 $this->load->view('insert_movie',$data);

}

public function view_theater_id()
{
	//$this->load->database('filmypass');
	$this->load->model('movie');
	$data['theater_info'] = $this->movie->get_id();
	 $this->load->view('show_theater_info',$data);

}
public function show_movies()
{

$this->load->model('movie');
	$data['movies_list'] = $this->movie->all_movie();
$this->load->view('list_movie',$data);
}

public function add_to_theater()
{

	$m_id = $this->input->post('movie_id');
	$m_name = $this->input->post('movie_name');
	$t_id = $this->input->post('theater_id');
	$show = $this->input->post('no_shows');
   $raw_data = array(
   	'theater_id' => $t_id,
   	'movie_name' => $m_name,
   	'movie_id' => $m_id,
   	'no_shows' => $show
   	);
	$this->load->model('movie');
	$this->movie->insert($raw_data);
	//$data['movie_edit'] = "Successfully edited";
	  	 redirect('http://localhost/filmypass/index.php/Admin/show_movies/');
}

}