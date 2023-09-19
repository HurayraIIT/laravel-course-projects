<?php

class Income
{
    private static string $income_file_path = './Storage/income.json';
    private array $income;

    public function __construct()
    {
        $this->income = IO::load_file_data(self::$income_file_path);
    }

    public function add_income(int $amount, string $category, string $description): void
    {
        $new_income = [
            "id" => count($this->income) + 1,
            "category" => $category,
            "amount" => $amount,
            "description" => $description
        ];

        $this->income[] = $new_income;
        IO::write_file_data($this->income, self::$income_file_path);
        echo "\n[success] New income created!";
    }

    public function view_income(): void
    {
        foreach ($this->income as $inc) {
            echo "\nAmount: {$inc['amount']} - ({$inc['category']}) - ({$inc['description']})";
        }
        echo "\nTotal Income: {$this->get_total()}\n";
    }

    public function get_total(): int
    {
        $total = 0;
        foreach ($this->income as $inc) {
            $total += (int) $inc['amount'];
        }
        return $total;
    }
}
