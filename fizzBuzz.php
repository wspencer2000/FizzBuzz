<?php

	$number = 1;

	while ($number <= 100){
		
		if($number % 3 == 0 && $number % 5 == 0){
			print "<h1>FizzBuzz</h1>";
		}

		else if($number % 3 == 0){
			print "<p>Fizz</p>";
		}

		else if($number % 5 == 0){
			print "<p>Buzz</p>";
		}
		
		#prints number if no divisor detected

		else{
			print '<p>'. $number . '</p>';
		}
		
		$number++;
	}
?>