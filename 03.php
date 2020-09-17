<?php
$name = 'sara';
$number = 4389990000;
$test = 'this is a test';
/*how to use variables
echo $name ;
echo $number ;
echo $test ;
*/
echo "value of name is : $name";
echo 'value of name is : $name';
define('pi',3.1455);
echo pi;
// ---------------Array---------------------

$names = array(
    'sam','omid','dariush','khashayar'
);
// echo $names;   ::::: we can not call array with echo
print_r($names);
echo $names[3];
// ******************************************

$names_indexed = array (
    'name1'=>'Sara',
    'name2'=>'bamzi',
    'name3'=>'ali',
    'name4'=>'kian',
    'name5'=>'kian',
    'name6'=>'kian',
    'name7'=>'Sara',
    'name8'=>'Sara',
);
array_push($names_indexed,'kamran');
array_push($names_indexed,'rezvan');
array_pop($names_indexed,);
unset($names_indexed ['name3']);
echo '<pre>';
print_r($names_indexed);
'</pre>';
// *****************************************
echo '<pre>';
print_r (array_count_values ($names_indexed) );
'</pre>';

echo '<pre>';
print_r (array_keys ($names_indexed) );
'</pre>';

echo '<pre>';
print_r (array_values ($names_indexed) );
'</pre>';

echo '<pre>';
asort ($names_indexed);
print_r ($names_indexed);
'</pre>';

echo '<pre>';
sort ($names_indexed);
print_r ($names_indexed);
'</pre>';

echo array_key_exists('name1',$names_indexed);

// Tamrinat*****************************************************************
$computer = array(
    'sara' => 20 ,
    'sina' => 19 ,
    'sam' => 17 ,
    'bamzi' => 20 ,
    'mina' => 10 ,
    'ali' =>19 ,
    'kian' => 13,
    'behi' => 12 ,
    'pari' => 15 ,
);
echo '<pre>';
print_r ($computer);
'</pre>';

echo '<pre>';
print_r (array_count_values ($computer) );
'</pre>';


?>
