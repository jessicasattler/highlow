<?php 
 
 // fwrite(STDOUT, 'What is your first name? ');

 // $firstName = fgets(STDIN);

 // fwrite (STDOUT, "Hello $firstName\n");

 // game picks a random number between 1 and 100.



//generates random number between 1 and 100
//we set it equal to a variable to be able to remember what that value is
$randomNumber = mt_rand (1, 100);
// echo ($randomNumber).PHP_EOL;

fwrite(STDOUT, 'Guess a number between 1 and 100 ');
$userGuess = fgets(STDIN);
fwrite (STDOUT, "You guessed $userGuess").PHP_EOL;

 
while($userGuess !== $randomNumber){
//we store what the user guessed in a variable to remember the value
//displays the number the user guessed 

if ($userGuess < $randomNumber){
	echo "HIGHER".PHP_EOL;

	fwrite(STDOUT, 'Guess again please ');
	$userGuess = fgets(STDIN);

}else if($userGuess > $randomNumber){
	echo "LOWER".PHP_EOL;

	fwrite(STDOUT, 'Guess again please ');
	$userGuess = fgets(STDIN);

}else{
	echo "GOOD GUESS! YOU WON!";
	exit(0); 
}


};
 ?>