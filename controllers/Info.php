<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Info extends CI_Controller{
    public function _construct(){
    parent::__construct();
    $this->load->helper('html');
    $this->load->helper('url');
}
    public function display(){
    $data['info']="America! America! Land of the brave, home of the free.<br/>"
    ."The country is composed of 52 states that can be divided into eastern states<br/>"
    ."and the western states.Each state is run by a state governor and each<br/>"
    ."state also has a senator who represents his/her state in the Senate."
      ."America is so big that every state actually has a sports franchise.";
    $data['east']="The Eastern States include:";
    $data['west']="The Western States include:";
    $data['info2']="Could you fill in the following form:";
    $data['info3']="You have insertd the following information";
    //loading the model
  $this->load->model('infodb');
//    $this->infodb->inputData();
    
    $data['showdata']=$this->infodb->showData();
    //print_r($mydata);die;
    
  $data['image']= array(
        'src'=>'C:/xampp/htdocs/CodeIgniter-3.0.6/application/images/state2.jpg',
        'alt'=>'An image of the US map',
        'width'=>'400',
        'height'=>'200',
    );
   
    
    $this->load->view('infoview',$data);
    

    
  }
}
?>