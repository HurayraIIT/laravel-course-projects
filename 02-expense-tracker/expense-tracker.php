<?php

require "Classes/Menu.php";

while(true) {
   $menu = new Menu();

   $menu->print_menu();
   $menu->handle_choice();
}