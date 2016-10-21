<?php

//What is the largest prime factor of the number 600851475143 ?

//ex The prime factors of 13195 are 5, 7, 13 and 29

$in = 600851475143;
//$divisions = array();

/*function isPrime($num) {

	if ($num == 1 || $num % 2 == 0) {
		return false;
	}

	if ($num == 2) {
		return true;
	}

	for ($i = 3; $i <= floor(sqrt($num)); $i = $i + 2) {
		if ($num % $i == 0) {
			break;
		} else {
			continue;
		}
	}

	if (floor(sqrt($num)) == $i - 1) {
		return true;
	} else {
		return false;
	}
}*/

function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
	if($num == 1)
		return false;

    //2 is prime (the only even number that is prime)
	if($num == 2)
		return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
    	return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
    	if($num % $i == 0)
    		return false;
    }

    return true;
}

/*function divisors($arr) {

	$divisors = array();
	for($j = 1; $j < $arr; $j++) {
		if ($arr % $j == 0) {
			$divisors[] = $j;
		}
	}
	return array_reverse($divisors);
}
$divisors = divisors($in);*/

function primes($n) {

	$primes = array();
	for ($j = 3; $j <= sqrt($n); $j++) {
		if ( $n % $j == 0 && isPrime($j)) {
			$primes[] = $j;
		}
	} 
	$revArr = array_reverse($primes);
	return $revArr[0];
}

echo primes($in);

/*foreach ($divisors as $k) {
	for ($k = $in; $k >= 1; $k--) {
		if (isPrime($k)) {
			if ($in % $k == 0) {
			$divisions[] = $j;
				echo $k;
				break;
			}
		}
	}
	if (isPrime($k)) {
		echo $k;
		break;
	}
}*/

//echo max($divisions);

?>