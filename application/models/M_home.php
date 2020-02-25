<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_model {
	
	const PERPAGE = 12;

	public function __construct(){
		parent::__construct();  
	}

	public function get_family($id = null, $start = 0)
	{
		$this->db->select();
		$this->db->from('tbl_family');
		$this->db->where('publish',1);
		if($id){
			$this->db->where('id',$id);
		}
		$this->db->order_by('id','DESC');
<<<<<<< HEAD
=======
		$this->db->offset($start);
		$this->db->limit(M_home::PERPAGE);
>>>>>>> e99cb7ff4dd62878afaa525f815600c3a2fbf5b1
		$query = $this->db->get();
		return $query->result();
	}
	
	public function searchMember($keyword)
	{
		$this->db->like('name', $keyword);
		return $this->db->get('tbl_family')->result_array();
	}
}
