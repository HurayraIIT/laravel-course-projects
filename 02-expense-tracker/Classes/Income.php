<?php

class Income
{
  private static $income_file_path = './Storage/income.json';
  private $income;

  public function __construct()
  {
    $this->income = IO::load_file_data(self::$income_file_path);
  }

  public function add_income(Int $amount, String $category, String $description)
  {
    $new_income = [
      "id" => count($this->income)+1,
      "category"=> $category,
      "amount"=> $amount,
      "description"=> $description 
    ];

    $this->income[] = $new_income;
    IO::write_file_data($this->income, self::$income_file_path);
  }

  public function view_income()
  {
    foreach ($this->income as $inc) {
      echo "\nIncome ID: {$inc['id']}\n";
      echo "\tAmount: {$inc['amount']}\n";
      echo "\tCategory: {$inc['category']}\n";
      echo "\tDescription: {$inc['description']}\n";
    }
  }
}
