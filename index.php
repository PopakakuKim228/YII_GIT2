public function multi() {
    if ($this->numbersAreSet()) {
        $result = $this->num1*$this->num2;
        echo "Результат умножения: {$this->num1}*{$this->num2} = {$result}\n";
    } else {
        echo "Сначала введите числа (пункт 1)\n";
    }
}