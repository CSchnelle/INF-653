
<?php
//get data from form
$first_name = filter_input(INPUT_GET, 'first_name');
$last_name = filter_input(INPUT_GET, 'last_name');
$age = filter_input(INPUT_GET, 'age');

$txt01 = "Hello, my name is";
$txt02 = "I am";
$txt03 = "years old";
$txt04 = "I am old enough to vote in the United States";
$txt05 = "I am not old enough to vote in the United States";

print . $txt01 . $first_name . $last_name .;
print . $txt02 . $age . $txt03 .;

//conditional using comparison operator

if ($age >= "18"){
	print . $txt04 .;
 }	else { 
	print . $txt05 .;
}

?>