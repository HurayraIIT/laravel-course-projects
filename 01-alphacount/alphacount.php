#!/opt/homebrew/bin/php
<?php

// Handle command line arguments
// In this case only help (-h/--h) will be handled.
$options = getopt($short_options="h", $long_options=["h"]);

function run_helper(array $options)
{
  if (isset($options['h'])) {
    echo "This program receives a string and outputs the alphabet count.\nGood luck!\n";
    exit;
  }
}

function find_alpha_count(string $input) : int {
  $numOfChars = 0;
  $chars = str_split($input);
  foreach ($chars as $char) {
    if (ctype_alpha($char)) {
      $numOfChars += 1;
    }
  }
  return $numOfChars;
}

// The main app loop
while (true) {
  run_helper($options);

  $input = readline("\nEnter a string (ctrl-c to quit):");
  echo find_alpha_count($input);
}