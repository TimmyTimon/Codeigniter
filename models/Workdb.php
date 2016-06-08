<?php
class Workdb extends CI_Model{
 public function _construct(){
        parent::_construct();
}
public function addData($data)
    {
             $this->db->insert('US_States',$data);
    }
	 public function viewData()
    {
             $this->db->select('*');
			 $this->db->from('US_States');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
    }
}
?>