#!/usr/bin/env php
<?php

require "functions.php";

// If no string is passed, show help info
if ($argc < 2) {
  print_help_info();
}

// Extract the input string
$input_string = isset($argv[1]) ? trim($argv[1]) : "";

// find and print the alphabet count
echo find_alpha_count($input_string);