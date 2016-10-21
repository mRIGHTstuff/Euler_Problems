<?php

/*Sum of multiples of 3 OR 5 up to 1000*/

for ($i = 0; $i < 1000; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0) {
	$sum += $i;
	}
}
echo $sum;
?>