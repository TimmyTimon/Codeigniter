<?php
class Assigndb extends CI_Model{

    private $input;
    private $db;

    public function _construct(){
        parent::_construct();
}
public function connectdb(){
$config['hostname'] = 'localhost';
$config['username'] = 'myusername';
$config['password'] = 'mypassword';
$config['database'] = 'mydatabase';
$config['dbdriver'] = 'mysqli';
$config['dbprefix'] = '';
$config['pconnect'] = FALSE;
$config['db_debug'] = TRUE;
}

public function insert(){
     $this->input->post('states');
     $this->input->post('states1');
     $this->input->post('states2');
     $this->input->post('states3');
     $this->input->post('statez');
     $this->input->post('statez1');
     $this->input->post('statez2');
     $this->input->post('statez3');
    $this->db->insert('entries',$this);
}
}
?>