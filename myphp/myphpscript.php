<?php
$thestates=array(
"Arizona",
"Alabama",
"New York",
"Texas",
"Washington",
"California",
"Iowa",
"New Hampshire",
"Tenessee",
"Louisiana",
"Atlanta",
"Maine",
"Ohio",
"Penselyvania",
"Michigan",
"Oklahoma",
"Arkansas",
"New Mexico",
"Illinois",
"Hawaii",
"Alaska",
"Florida",
"North Dakota",
"South Dakota",
"Kansas",
"Kentuchy",
"North Carolina",
"South Carolina",
"Indiana",
"Nevada",
"Utah",
"Idaho",
"Colorado",
"Conneticuit",
"Massachusets",
"Maryland",
);

//getting the q parameter from URL
$q =$_GET("q");

$hint ="";

//looking up all the hints from the array
if($q !==""){
$q =statetolower($q);
$len=statelen($q);
foreach($thestates as $mystates){
if(stristr($q, substate($mystate, 0, $len))){
if($hint === ""){
$hint=$mystate;
}
else{
$hint.=", $mystate";
}
}
}
}

//The program will echo "no suggestions" when state typed is not found
echo $hint === "" ? "no suggestions" :$hint;
?>