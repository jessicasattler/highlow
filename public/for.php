<?php  

fwrite(STDOUT, 'Please provide a starting number '.PHP_EOL);


$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Please provide an ending number '.PHP_EOL);

$endingNumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What you would like the numbers to increment by '.PHP_EOL);
$userIncrement = trim(fgets(STDIN));



//if users passed in two numbers, then input them as the starting and ending number in the loop
//else, give error message if both numbers are not numeric

$argsAreNumericandValid = is_numeric($startingNumber) && is_numeric($endingNumber) && $startingNumber < $endingNumber;

//argc should equal 3 because the first argument is the file name by default, the second and 
//third arguments should be the two user inputs
if ($argsAreNumericandValid){

	if ($userIncrement != null){

		for($i = $startingNumber ; $i <= $endingNumber ; $i += $userIncrement){
				echo "\$i has a value of {$i}\n";
		}
	}else{
		for($i = $startingNumber; $i <= $endingNumber ; $i += 1){
				echo "\$i has a value of {$i}\n";
		}
	}

}else{
	echo "Please pass in a valid starting and a valid ending number";
}