<?php

class Menu {
  public static function print_menu() {
    $menu = "\n";
    $menu .= "0. Show menu\n";
    $menu .= "1. Add income\n";
    $menu .= "2. Add expense\n";
    $menu .= "3. View incomes\n";
    $menu .= "4. View expenses\n";
    $menu .= "5. View savings\n";
    $menu .= "6. View categories\n";
    $menu .= "\nPress [0-6] to perform actions: ";

    echo $menu;
  }
}
