<?php

require "Classes/Menu.php";

$menu = new Menu();

while(true) {
   $menu->print_menu();
   $menu->handle_choice();
}