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
);
array_push($names_indexed,'kamran');
array_push($names_indexed,'rezvan');
echo '<pre>';
print_r($names_indexed);
'</pre>';


?>
