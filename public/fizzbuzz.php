<?php 
	
// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

for ($i = 1; $i <=100; $i += 1){

	//multiplies both 3 and 5
	if(($i % 3 == 0)&&($i % 5 == 0)){
		echo "Fizz Buzz".PHP_EOL;
	}

	//multiplies 3
	elseif ($i % 3 == 0 ){

			echo "Fizz".PHP_EOL;
	}

	//multiplies 5, print Buzz
	elseif ($i %  5 == 0){

		echo "Buzz".PHP_EOL;
	}
	

	else{
		echo $i .PHP_EOL;
	}

}

//another solution
//for ($i =1; $i <=100; $i += 1){
// 	$msg = '';

// 	if ($i % 3 == 0)
// }
//not finished with the example, but can also google unorthox solutions

