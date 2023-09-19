<?php

class Expense
{
    private static string $expense_file_path = './Storage/expense.json';
    private array $expense;

    public function __construct()
    {
        $this->expense = IO::load_file_data(self::$expense_file_path);
    }

    public function add_expense(int $amount, string $category, string $description): void
    {
        $new_expense = [
            "id" => count($this->expense) + 1,
            "category" => $category,
            "amount" => $amount,
            "description" => $description
        ];

        $this->expense[] = $new_expense;
        IO::write_file_data($this->expense, self::$expense_file_path);
    }

    public function view_expense(): void
    {
        foreach ($this->expense as $exp) {
            echo "\nAmount: {$exp['amount']} - ({$exp['category']}) - ({$exp['description']})";
        }
        echo "\nTotal Expense: {$this->get_total()}\n";
    }

    public function get_total(): int
    {
        $total = 0;
        foreach ($this->expense as $exp) {
            $total += (int) $exp['amount'];
        }
        return $total;
    }
}
