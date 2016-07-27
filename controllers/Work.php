<?php
class Work extends CI_Controller{
public function display(){
    $data['title']="States in America";
    $data['heading']="The Different American States";
    $data['content']="The United States of America,land of the brave,home of the free, is made up of a total of at least 52 states.<br/>"
."Each state has its own capital and is run by a gorvernor.<br/>". "The states can be divided into the eastern
states and the western states.<br/>"
."<h2>The eastern states include:</h2>" 
."<ol>
<li>New York</li>
<li>New Jersey</li>
<li>Florida</li>
<li>Ohio</li>
Can you name the other eastern states?<br/>";          
$data['content2']="<h2>The western states include:</H2>"
."<ol>
<li>California</li>
<li>Texas</li>
<li>Oklahoma</li>
<li>Kansas</li>
Can you name the other western states?";
$this->load->view('workview',$data); 
}
public function addData(){
    //getting data from the form and putting it in an array
    $mydata=array(
        'ID'=>'',
     'NAME'=>$this->input->post('mystates'),
     'NAME'=>$this->input->post('mystates1'),
     'NAME'=>$this->input->post('mystates2'),
     'NAME'=>$this->input->post('mystates3'),
     'NAME'=>$this->input->post('mystatez'),
     'NAME'=>$this->input->post('mystatez1'),
     'NAME'=>$this->input->post('mystatez2'),
     'NAME'=>$this->input->post('mystatez3'),
    );
    //loading the model
    $this->load->model('workdb');
    $this->Workdb->inputData($mydata);
    //the data is selelcted from the database to be shown in the view
    $mydata['showdata']=$this->Workdb->viewData();
    //the data is sent to the view
    $this->load->view("workview",$mydata);
}
}