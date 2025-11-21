<?php
class Calculator {
    private $num1;
    private $num2;
    public function __construct() {
        $this->num1 = 0;
        $this->num2 = 0;
    }
    public function displayMenu() {
        echo "\n=== КАЛЬКУЛЯТОР ===\n";
        echo "1. Ввести два числа\n";
        echo "2. Выполнить сложение\n";
        echo "3. Выполнить вычитание\n";
        echo "4. Выполнить деление\n";
        echo "5. Возвести число в степень\n";
        echo "6. Выход\n";
        echo "Выберите пункт меню: ";
    }
    public function run() {
        while (true) {
            $this->displayMenu();
            $choice = trim(fgets(STDIN));
            switch ($choice) {
                case '1':
                    $this->inputNumbers();
                    break;
                case '2':
                    echo "Функция сложения пока не реализована\n";
                    break;
                case '3':
                    echo "Функция вычитания пока не реализована\n";
                    break;
                case '4':
                    echo "Функция деления пока не реализована\n";
                    break;
                case '5':
                    $this->power();  
                    break;
                case '6':
                    echo "Выход из программы.\n";
                    exit(0);
                default:
                    echo "Неверный выбор. Попробуйте снова.\n";
            }
        }
    }
    private function inputNumbers() {
        echo "Введите первое число: ";
        $this->num1 = (float)trim(fgets(STDIN));
        echo "Введите второе число: ";
        $this->num2 = (float)trim(fgets(STDIN));
        echo "Числа сохранены: {$this->num1} и {$this->num2}\n";
    }
    public function power() {
        if ($this->numbersAreSet()) {
            $result = pow($this->num1, $this->num2);
            echo "Результат: {$this->num1} ^ {$this->num2} = {$result}\n";
        } else {
            echo "Сначала введите числа (пункт 1)\n";
        }
    }
    private function numbersAreSet() {
        return isset($this->num1) && isset($this->num2);
    }
}
$calculator = new Calculator();
$calculator->run();
?>