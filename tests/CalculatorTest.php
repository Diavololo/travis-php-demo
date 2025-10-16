<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Demo\Calculator;

final class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calc = new Calculator();
        $this->assertSame(5, $calc->add(2, 3));
        // Para forzar un fallo en la demo, cambia el 5 por 6 y haz push.
    }
}
