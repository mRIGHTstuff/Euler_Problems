<?php 

//By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

//What is the 10001 prime number?

//notes: A prime number is any number divisible by 1 and itself. Solved using http://primes.utm.edu/lists/small/10000.txt

//determine how to find the place of the 10 001 value

function isPrime($num) {

	if( $num == 1 ) {
		return false;
	}

	if( $num == 2 ) {
		return true;
	}

	if( $num % 2 == 0 ) {
		return false;
	}

	for( $i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
		if( $num % $i == 0)
			return false;
	}

	return true;
}

function nextPrime($num) {

	$next = array();

	while ((count($next) <= 9) && ($num <= 110000)) {

		if (isPrime($num) == true) {
			$next[] = $num;
		}

		$num++;
	}

	return $next;
}

print_r(nextPrime(104728));

?>