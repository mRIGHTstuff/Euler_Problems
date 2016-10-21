<?php

/*Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum*/

for ($i = 1; $i <= 100; $i++) {
	
	$sumSq += $i*$i;

}


for ($j = 1; $j <= 100; $j++) {

	$sum += $j;
	$sqSum = $sum * $sum;

}

echo $sqSum - $sumSq;


?>