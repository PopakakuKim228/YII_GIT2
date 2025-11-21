public function subtract() {
    if ($this->numbersAreSet()) {
        $result = $this->num1 - $this->num2;
        echo "Результат вычитания: {$this->num1} - {$this->num2} = {$result}\n";
    } else {
        echo "Сначала введите числа (пункт 1)\n";
    }
}