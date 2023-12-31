<?php

require_once "./Utils/IO.php";

class Categories
{
    private static string $categories_file_path = './Storage/categories.json';
    private array $categories;

    public function __construct()
    {
        $this->categories = IO::load_file_data(self::$categories_file_path);
    }

    public function add_category(string $category_type, string $name): void
    {
        if ($category_type !== 'income-categories' and $category_type !== 'expense-categories') {
            echo "\n[failed] Enter a valid category type!\n";
            return;
        }
        $this->categories[$category_type][] = $name;
        IO::write_file_data($this->categories, self::$categories_file_path);
        echo "\n[success] New category added!\n";
    }

    public function view_categories(): void
    {
        //var_dump($this->categories);
        $i = 0;
        if (isset($this->categories['income-categories'])) {
            echo "\nIncome Categories:\n";
            foreach ($this->categories['income-categories'] as $category) {
                echo "\t$i: $category\n";
                $i++;
            }
        } else {
            echo "No income category exists!\n";
        }

        $i = 0;
        if (isset($this->categories['expense-categories'])) {
            echo "\nExpense Categories:\n";
            foreach ($this->categories['expense-categories'] as $category) {
                echo "\t$i: $category\n";
                $i++;
            }
        } else {
            echo "No expense category exists!\n";
        }
    }

    public function category_exists(string $category_type, string $name): bool
    {
        return isset($this->categories[$category_type]) && in_array($name, $this->categories[$category_type]);
    }
}
