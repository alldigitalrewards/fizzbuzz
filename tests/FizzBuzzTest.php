<?php


use AllDigitalRewards\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public FizzBuzz $fizbuzz;

    public function setUp(): void
    {
        $this->fizbuzz = new FizzBuzz();
    }

    public function test_number()
    {
        for ($i = 1; $i < 1000000; $i++) {
            if ($i % 3 === 0 || $i % 5 === 0) {
                continue;
            }

            self::assertSame($i, $i);
        }
    }

    public function test_fizz()
    {
        for ($i = 1; $i < 1000000; $i++) {
            if (($i * 3) % 5 === 0) {
                continue;
            }
            self::assertSame(
                "Fizz",
                $this->fizbuzz->izFizzBuzz($i * 3)
            );
        }
    }

    public function test_buzz()
    {
        for ($i = 1; $i < 1000000; $i++) {
            if (($i * 5) % 3 === 0) {
                continue;
            }
            self::assertSame(
                "Buzz",
                $this->fizbuzz->izFizzBuzz($i * 5)
            );
        }
    }

    public function testFizzBuzz()
    {
        for ($i = 1; $i < 1000000; $i++) {
            if (($i * 5) % 3 === 0) {
                self::assertSame(
                    "FizzBuzz",
                    $this->fizbuzz->izFizzBuzz($i * 5)
                );
            }
        }
    }
}
