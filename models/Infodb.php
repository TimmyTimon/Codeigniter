<?php
class Infodb extends CI_Model{
    public function _construct(){
        parent::_construct();
    }
    public function inputData(){
        $this->load->database('stateinfo');
        $mydata= array(
          'ID'=>'5',
        'STATE'=>$this->input->get('state'),
        'Fname'=>$this->input->get('fname'),
        'lname'=>$this->input->get('lname'),
        'team'=>$this->input->get('team'),
    );
 $this->db->insert('mystate',$mydata);
    }
    public function showData(){
        $this->load->database('stateinfo');
        $this->db->select('ID,STATE,Fname,lname,team');
       $query=$this->db->get('mystate');
       return $query->result_array();
//       return $query->result_array();
        }
}

