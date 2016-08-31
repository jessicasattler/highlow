<?php  

fwrite(STDOUT, 'Please provide a starting number '.PHP_EOL);


$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Please provide an ending number '.PHP_EOL);

$endingNumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What you would like the numbers to increment by '.PHP_EOL);
$userIncrement = trim(fgets(STDIN));



//if users passed in two numbers, then input them as the starting and ending number in the loop
//else, give error message if both numbers are not numeric

$argsAreNumericandValid = is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2];

//argc should equal 3 because the first argument is the file name by default, the second and 
//third arguments should be the two user inputs
if ($argc ==3 && $argsAreNumericandValid){

	if ($userIncrement != null){

		for($i = $argv[1] ; $i <= $argv[2] ; $i += $argv[3]){
				echo $i .PHP_EOL;
		}
	}else{
		for($i = $argv[1]; $i <= $argv[2] ; $i += 1){
				echo $i .PHP_EOL;
		}
	}

}else{
	echo "Please pass in two valid numbers";
}