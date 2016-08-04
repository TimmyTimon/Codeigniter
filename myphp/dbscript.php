<?php
mysql_connect("localhost","root","")or die("could not connect");
mysql_select_db("stateinfo")or die("could not find db");
if(isset(filter_input(INPUT_POST,"state"))){
$exper=filter_input(INPUT_POST,"state");
$query=  mysql_query("SELECT state FROM thestates WHERE state LIKE '%exper%'");
while($row=  mysql_fetch_array($query)){
    $statename=$row['state'];
    echo $statename;
}
}