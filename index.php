public function power() {
    if ($this->numbersAreSet()) {
        $result = $this->num1 ^ $this->num2;
        echo "Результат возведения в степень: {$this->num1} ^ {$this->num2} = {$result}\n";
    } else {
        echo "Сначала введите числа (пункт 1)\n";
    }
}