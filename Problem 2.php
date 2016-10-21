<?php

/*Fibonacci seq*/

function fib($n) {
	if ($n <= 2) {
		return 1;

	} else {
		return fib($n - 1)+fib($n - 2);

	}
}

for ($n = 1; $n < 1000; $n++) {
	if (fib($n) < 4000000) {
		if (fib($n) % 2 == 0) {
		$sum += fib($n);
		}
	} else {
		break;
	}
}

echo $sum;


?>