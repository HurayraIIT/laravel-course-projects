<?php

// Print the application usage with example and exit
function print_help_info()
{
  echo "\nThis program receives a string and outputs the alphabet count.\n\n";
  echo "Usage: \n./alphacount.php \"PHP is love!\"\n\n";
  echo "Output: 9\n\n";
  echo "Good Luck!\n";
  exit(1);
}

// Return the character count (a-zA-Z) in the given string
function find_alpha_count(string $input): int
{
  $numOfChars = 0;
  $chars = str_split($input);
  foreach ($chars as $char) {
    if (ctype_alpha($char)) {
      $numOfChars += 1;
    }
  }
  return $numOfChars;
}
