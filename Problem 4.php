<?php

//Find the largest palindrome made from the product of two 3-digit numbers.

//ex A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99

function revNum($num) {

	$stNum = (string) $num;

	$revSt = strrev($stNum);

	$rev = (int) $revSt;

	return $rev;
}

$array = array();

for ($i = 100; $i <= 999; $i++) {
	for ($j = 100; $j <= 999; $j++) {
		
		$prd = $i * $j;

		if ($prd == revNum($prd)) {

	$array[] = $prd;
	}

}
}

echo max($array);


?>