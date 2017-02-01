<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class movie extends CI_Model {

    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }


 
public function insert($data)
{
	 
	  $query=$this->db->insert('movie_theater',$data);
}

public function insert_movie_info($data)
{
$query=$this->db->insert('movie',$data);
}


public function insert_theater()
{
	$t_name = $this->input->post('theater_name');
	$location = $this->input->post('location');
	$data = array(
				'name' => $t_name,
				'location' => $location
				);
	$this->db->insert('theater',$data);
}
public function get_id()
{
		$q = $this->db->query( 'SELECT * FROM theater');
	 
	return $q->result_array();
}
 public function get_movie_info()
 {
$q = $this->db->query( 'SELECT * FROM movie');
	 
	return $q->result_array();
 }


public function get_where($id)
{

$q = $this->db->get_where('movie',array('movie_id'=>$id));

	return $q->result_array();
}


public function all_movie()
{
	$q = $this->db->query( 'SELECT * FROM movie');
	 
	return $q->result_array();
}

public function get_relation($id)
{
 $this->db->where('movie_id', $id);
$this->db->from('movie_theater');
 
 $this->db->join('theater', 'theater.theater_id = movie_theater.theater_id');

 $query = $this->db->get();
	return $query->result_array();
}

}

?>