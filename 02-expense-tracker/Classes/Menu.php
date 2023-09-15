<?php

require "Classes/Categories.php";
require "Classes/Income.php";
require "Classes/Expense.php";

class Menu
{
  private const SHOW_MENU = 0;
  private const ADD_CATEGORY = 1;
  private const ADD_INCOME = 2;
  private const ADD_EXPENSE = 3;
  private const VIEW_CATEGORIES = 4;
  private const VIEW_INCOMES = 5;
  private const VIEW_EXPENSES = 6;
  private const VIEW_SAVINGS = 7;

  private static $actions = [
    "Show menu",
    "Add category",
    "Add income",
    "Add expense",
    "View categories",
    "View incomes",
    "View expenses",
    "View savings"
  ];

  public function print_menu()
  {
    $menu = "\n";
    foreach (self::$actions as $key => $value) {
      $menu .= "{$key}: {$value}\n";
    }
    $action_last_index = count(self::$actions) - 1;
    echo $menu;
  }

  public function handle_choice()
  {
    $action_last_index = count(self::$actions) - 1;
    $prompt = "\nPress [0-{$action_last_index}] to perform actions: ";

    $choice = (int) readline($prompt);
    echo "\nYou have chosen: {$choice}\n";

    switch ($choice) {
      case self::SHOW_MENU:
        $this->print_menu();
        break;

      case self::ADD_CATEGORY:
        $this->add_category();
        break;

      case self::ADD_INCOME:
        $this->add_income();
        break;

      case self::ADD_EXPENSE:
        $this->add_expense();
        break;

      case self::VIEW_CATEGORIES:
        $this->view_categories();
        break;

      case self::VIEW_INCOMES:
        $this->view_incomes();
        break;

      case self::VIEW_EXPENSES:
        $this->view_expenses();
        break;

      case self::VIEW_SAVINGS:
        $this->view_savings();
        break;
      
      default:
        echo "Invalid choice!";
    }
  }

  private function add_category() {
    echo "Press [1] to add income category\n";
    echo "Press [2] to add expense category\n";
    $choice = (int) readline();
    if ($choice !== 1 && $choice !== 2) {
      $this->add_category();
      return;
    }
    $name = readline("Type the category name: ");
    $cat = new Categories();
    $category_type = $choice === 1 ? "income-categories" : "expense-categories";
    $cat->add_category($category_type, $name);
  }

  private function add_income() {
    echo "ToDo: add_income";
  }

  private function add_expense() {
    echo "ToDo: add_expense";
  }

  private function view_categories() {
    echo "ToDo: view_categories";
    $cat = new Categories();
    $cat->view_categories();
  }
  private function view_incomes() {
    echo "ToDo:view_incomes ";
    $inc = new Income();
    $inc->view_income();
  }
  private function view_expenses() {
    echo "ToDo: view_expenses";
    $exp = new Expense();
    $exp->view_expense();
  }
  private function view_savings() {
    echo "ToDo: view_savings";
    $inc = new Income();
    $exp = new Expense();
    $savings = $inc->get_total() - $exp->get_total();
    echo "\nSavings: {$savings}\n";
  }
}
