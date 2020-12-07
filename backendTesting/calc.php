<?php

class Calculator {
	public function add(int $a, int $b): int {
		return $a + $b;
	}

	public function subtract(int $a, int $b): int {
		return $a - $b;
	}

	public function multiply(int $a, int $b): int {
		return $a * $b;
	}

	public function divide(int $a, int $b): float {
		if ($b === 0) {
			throw new \InvalidArgumentException("Divider can't be zero");
		}
		return $a / $b;
	}

	public function sqr(int $a, int $b): float {
		if ($a < 0) {
			throw new \InvalidArgumentException("Error!");
		}
		return sqrt($a);
	}

	public function exponentiation(int $a, int $b): int {
		return $a ** $b;
	}
}