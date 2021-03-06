<?php
// arrays

define("index", "10");
$arr = [];
$arr[10] = 1;
$arr["10"] = 3;
$arr[index] = 2;
var_dump($arr);     // [10 => 2]


//-----------

$arr = [2 => 'dwa', 5 => 'piec'];
unset($arr[5]);
$arr[] = 'trzy';
var_dump($arr);         // key - 6, as 5 used to exist in this array

//-----------

function arraytest()
{
	echo 'test';
	return [1,2,3];
}
foreach (arraytest() as $a) {   // echo 'test' is called just once
	var_dump($a);
}

// ---- references in foreach loop
$a = ['zero', 'one', 'two'];

foreach ($a as &$v) {}
foreach ($a as $v) {}

print_r($a);
/* Output:

 Array
(
    [0] => zero
    [1] => one
    [2] => one
)
 */

$a = array('green', '1', 1);
$b = array('avocado', 'apple', 'banana');
print_r(array_combine($a, $b)); // Array ( [green] => avocado [1] => banana )

$a = array('green', 'red');
print_r(array_combine($a, $b)); // Warning: array_combine(): Both parameters should have an equal number of elements
