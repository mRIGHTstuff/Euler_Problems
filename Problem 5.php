<?php

/*Smallest multiple that is evenly divisible by two three digit numbers*/

for ($i = 1; $i <= 500000000; $i++) {
	for ($j = 1; $j <= 20; $j++) {
		if ($i % $j != 0) {
			break;
		} else {
			if ($j == 20) {
			echo $i;
			exit;
			}
		}
	}
}

?>