<?php
class Workdb extends CI_Model{
 public function _construct(){
        parent::_construct();
}
public function inputData($mydata)
{
             $this->db->insert('us_states',$mydata);
    }
	 public function viewData()
    {
             $this->db->select('*');
			 $this->db->from('us_states');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
    }
}
?>