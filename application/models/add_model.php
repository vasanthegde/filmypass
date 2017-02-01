<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class add_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    $this->load->database();
    }

public function add_book($id)
{
		if($id != null){
	$data = array('Book_name' =>$this->input->post('Book_name'),
					'Acc_no'=>$this->input->post('Acc_no'),
					'Author_name'=>$this->input->post('Author_name'),
					'Catagory' =>$this->input->post('Catagory'),
					'Price'=>$this->input->post('Price'),
					'Date'=>$this->input->post('Date'),
					'Section_no'=>$this->input->post('Section_no'),
					'img_path' =>$id,
				);
 } else if($id == null){

$data = array('Book_name' =>$this->input->post('Book_name'),
					'Acc_no'=>$this->input->post('Acc_no'),
					'Author_name'=>$this->input->post('Author_name'),
					'Catagory' =>$this->input->post('Catagory'),
					'Price'=>$this->input->post('Price'),
					'Date'=>$this->input->post('Date'),
					'Section_no'=>$this->input->post('Section_no'),
					//'img_path' =>$id,
				);

 }
 
 if( $query=$this->db->insert('book',$data)){
 	return true;
 } else { return false;}
 
 
}


public function display(){

	$q = $this->db->query( 'SELECT * FROM book');
	 
	return $q->result_array();

}
//Computer Science
public function display_cs(){

	$q = $this->db->get_where('book',array('Catagory'=>'CS'));

	return $q->result_array();
}

//Electronics
public function display_ec(){

	$q = $this->db->get_where('book',array('Catagory'=>'EC'));
	 
	return $q->result_array();
}


//Biology
public function display_bi(){

	$q = $this->db->get_where('book',array('Catagory'=>'BI'));
	 
	return $q->result_array();
}

//Mechanical
public function display_me(){

	$q = $this->db->get_where('book',array('Catagory'=>'ME'));
	 
	return $q->result_array();
}


//Mathamatics
public function display_mt(){

	$q = $this->db->get_where('book',array('Catagory'=>'MT'));
	 
	return $q->result_array();
}


//Civil
public function display_cv(){

	$q = $this->db->get_where('book',array('Catagory'=>'CV'));
	 
	return $q->result_array();
}

public function search_id($id){

 
	
	 $this->db->select('*');
	 $this->db->from('book');
	//$this->db->where('Catagory','EC');
	$q =  $this->db->like('Book_name',$id,'both');

 //echo $q->num_rows();	 
	return $this->db->get()->result_array();

}
public function add_user($id)
{
	
	$data =array('user_name'=>$id);
	return $this->db->insert('user',$data);
}
public function get_count($userid){

	 
	$this->db->where('user_id',$userid);
	$query = $this->db->get('user');
	if($query->num_rows ==1)
	{
		return $query->row();
	}
		else {
			return false;
			}
}

public function issue_book($count){
$userid = $this->input->post('user_id');
$acc_no = $this->input->post('acc_no');
 $d =date("d-m-y");
$data =array('Current_user'=>$userid,'Issue_date'=>$d);
	$this->db->where('Acc_no',$acc_no);
	$this->db->update('book',$data);

	$data =array('book_count'=>$count);
	$this->db->where('user_id',$userid);
$query = $this->db->update('user',$data);
if($query)
	{ 

		$history =array('user_id'=>$userid,'acc_no'=>$acc_no);
	  $this->db->insert('book_history',$history);
		return true;
	}
		else {
			return false;
			}

}

public function get_username($userid){

	 
	$this->db->where('user_id',$userid);
	$query = $this->db->get('user');
	if($query->num_rows ==1)
	{
		return $query->row();
	}
		else {
			return false;
			}
}

public function check_availability($acc_no){

$this->db->where('Acc_no',$acc_no);
	$query = $this->db->get('book');
	if($query->num_rows ==1)
	{
		return $query->row();
	}
		else {
			return false;
			}
}
 
public function total_records(){
$q = $this->db->query( 'SELECT * FROM book');
return $q->num_rows;

}



public function search_CS($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','CS');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}

public function search_EC($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','EC');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}

public function search_BI($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','BI');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}

public function search_ME($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','ME');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}

public function search_MT($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','MT');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}

public function search_CV($id){

	 $this->db->select('*');
	 $this->db->from('book');
	$this->db->where('Catagory','CV');
	$q =  $this->db->like('Book_name',$id,'both');
	return $this->db->get()->result_array();

}
 public function maintain_history($user_name,$book_name,$catagory)
 {
 		$userid = $this->input->post('user_id');
 		$acc_no = $this->input->post('acc_no');
 		$data = array('user_id' => $userid,
 						'user_name' => $user_name,
 							'book_name' => $book_name,
 								'acc_no' =>$acc_no,
 									'catagory'=>$catagory);
 		$this->db->insert('book_history',$data);
 }

public function get_user_id(){

	$q = $this->db->query( 'SELECT user_id FROM user');
	 
	return $q->result_array();

}
public function user_book($userid){
	$this->db->where('Current_user',$userid);
	$query = $this->db->get('book');
	if($query->num_rows)
	{
		return $query->result_array();
	}
		else {
			return false;
			}

}


public function username($userid){

	 
	$this->db->where('user_id',$userid);
	$query = $this->db->get('user');
	if($query->num_rows ==1)
	{
		return $query->result_array();
	}
		else {
			return false;
			}
}

public function return_book($count){
$userid = $this->input->post('user_id');
$acc_no = $this->input->post('acc_no');

$data =array('Current_user'=>'0');
	$this->db->where('Acc_no',$acc_no);
	$this->db->update('book',$data);

	$data =array('book_count'=>$count);
	$this->db->where('user_id',$userid);
$query = $this->db->update('user',$data);
if($query)
	{
		return true;
	}
		else {
			return false;
			}

}


public function check(){
	$acc_no = $this->input->post('acc_no');
	$userid = $this->input->post('user_id');

 $query = $this->db->get_where('book',array('Current_user'=>$userid,'Acc_no'=>$acc_no));
	 
	if($query->num_rows)
	{
		return $query->result_array();
	}
		else {
			return false;
			}
}

public function remove_book($id){
  
// $query = $this->db->get('book');
  $this->db->delete('book',array('Acc_no'=>$id));
   
 if($this->db->affected_rows()){
 	return true;
}else{ return false;}
}

public function confirm_remove(){
	$acc_no = $this->input->post('acc_no');

 $query = $this->db->get_where('book',array('Acc_no'=>$acc_no));
	 
	if($query->num_rows)
	{
		return $query->result_array();
	}
		else {
			return false;
			}

}
} 