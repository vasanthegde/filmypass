<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class project_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    $this->load->database();
    }
public function get_latest_tuple()
{
	$this->db->limit(1);
	$this->db->order_by('id', 'DESC');
$query = $this->db->get('records');
$myRow = $query->result_array();
return $myRow;
}
public function insert()
{
	$value1 = $this->input->post('value1');
	$value2 = $this->input->post('value2');
	$value3 = $this->input->post('value3');
	$value4 = $this->input->post('value4');
	$value5 = $this->input->post('value5');
	  $data = array('value1'=>$value1,
	  					'value2' => $value2,
	  					'value3' => $value3,
	  					'value4' =>$value4,
	  					'value5'=>$value5);

	 return $query=$this->db->insert('records',$data);
}

}

?>