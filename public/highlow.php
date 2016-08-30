<?php 
 
 // fwrite(STDOUT, 'What is your first name? ');

 // $firstName = fgets(STDIN);

 // fwrite (STDOUT, "Hello $firstName\n");

 // game picks a random number between 1 and 100.



//generates random number between 1 and 100
//we set it equal to a variable to be able to remember what that value is

if ($argc == 3){

$min = $argv[1];
$max = $argv[2];

var_dump($argc);
var_dump($argv);
}else{
	$min = 1;
	$max = 100;
}



$randomNumber = mt_rand ($min, $max);
// echo ($randomNumber).PHP_EOL;

fwrite(STDOUT, "Guess a number between $min and $max ");
$userGuess = trim(fgets(STDIN));
fwrite (STDOUT, "You guessed $userGuess".PHP_EOL);

 
while($userGuess !== $randomNumber){
//we store what the user guessed in a variable to remember the value
//displays the number the user guessed 

if ($userGuess < $randomNumber){
	echo "HIGHER".PHP_EOL;

	fwrite(STDOUT, 'Guess again please ');
	$userGuess = trim(fgets(STDIN));

}else if($userGuess > $randomNumber){
	echo "LOWER".PHP_EOL;

	fwrite(STDOUT, 'Guess again please ');
	$userGuess = trim(fgets(STDIN));

}else{
	echo "GOOD GUESS! YOU WON!";
	exit (0);

	// fwrite(STDOUT, "Would you like to continue playing? yes or no? ");
	// $userPlay = trim(fgets(STDIN));
	// if($userPlay = no){
	// exit(0); 
		
	// }else if($userPlay = yes){

	// }
	
}


};

//ask user if they want to play again
//keep track of their guesses 
//make it pretty 
 ?>