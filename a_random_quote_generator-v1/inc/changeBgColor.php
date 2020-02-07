<?php
//changes the background color of the page on refresh

$bodyColor = array('<body class="red">','<body class="blue">','<body class="green">','<body class="yellow">');

//chooses a random element from the array
function randomNumber($i){
     return $i[rand(0,3)];
 };
 
//prints the array element to the page 
function changeBGcolor($i){
    $rundNum = randomNumber($i);
    print $rundNum;
};
  
changeBGcolor($bodyColor);
?>