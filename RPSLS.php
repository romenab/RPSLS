<?php
$userGuess = strtolower(readline("Rock, paper, scissors, lizard or spock? "));
$elements = ["rock", "paper", "scissors", "lizard", "spock"];
$opponentGuess = $elements[array_rand($elements)];
$elementsWin = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["paper", "spock"],
    "spock" => ["rock", "scissors"]
];
if (!in_array($userGuess, $elements)) {
    echo "Invalid input!";
}else {
    if ($userGuess == $opponentGuess) {
        echo "It's a tie!" . PHP_EOL;
    } elseif (in_array($opponentGuess, $elementsWin[$userGuess])) {
        echo "You win!" . PHP_EOL;
    } else {
        echo "You lose!" . PHP_EOL;
    }
    echo "Your choice: $userGuess" . PHP_EOL;
    echo "Opponent's choice: $opponentGuess" .PHP_EOL;
}
