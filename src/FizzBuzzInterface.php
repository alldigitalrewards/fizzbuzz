<?php


namespace AllDigitalRewards;


interface FizzBuzzInterface
{
    /**
     * Returns "FizzBuzz" for results divisible by 3 and 5
     * Returns "Fizz" for results divisible by 3
     * Returns "Buzz" for results divisible by 5
     * Returns the number provided if no previous circumstance is met.
     *
     * @param int $number
     * @return string
     */
    public function izFizzBuzz(int $number);
}