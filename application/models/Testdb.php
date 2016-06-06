<?php
class Testdb extends CI_Model {
public function __construct(){
parent::__construct();
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
public function getData(){
$query=$this->db->get('states');
return $query->result();
}
}
?>