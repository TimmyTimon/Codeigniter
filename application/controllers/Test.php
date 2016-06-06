<?php

class Test extends CI_Controller{
    public function display(){
        $data['title']=" States in America";
        $data['heading']="The Different American States";
        $data['content']="Ameica is made up of a total of at least 51 states<br/>"
                . "These states can be divided into east and west.<br>"
                ."<h2>The states in the east include:</h2>"
                . "<ul The east states include>
                . <li> New York</li>
                   <li>New Jersey</li>
                   <li>Ohio</li>
                   <li>Florida</li>
                   Can you name some other states in the east of America?<br/>"
               ."<h2> The states in the west include:</h2>"
               . "<ol>
                    <li>California</li>
                    <li>Texas</li>
                    <li>Oklahoma</li>
                    </ol>
                    Can you name the other states that are found in the west?<br/>";
        $this->load->view('mytest',$data);
        $this->load->model('testdb');
    }
    }
    ?>