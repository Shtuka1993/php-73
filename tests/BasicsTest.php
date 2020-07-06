<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.constants.predefined.php
     */
    public function testMagicConstants()
    {
        // The current line number of the file.
        // __LINE__
        $this->assertEquals(14, __LINE__);

        // The function name, or {closure} for anonymous functions.
        // __FUNCTION__
        $this->assertEquals('testMagicConstants', __FUNCTION__);

        // The function name, or {closure} for anonymous functions.
        // __CLASS__
        $this->assertEquals('BasicsTest', __CLASS__);

        // The class method name.
        //__METHOD__
        $this->assertEquals('BasicsTest::testMagicConstants', __METHOD__);

        // The name of the current namespace.
        // __NAMESPACE__
        $this->assertEquals('', __NAMESPACE__);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.boolean.php
     */
    public function testConvertingToBoolean()
    {
        // Positive integers
        $this->assertEquals(true, (bool) 1);
        $this->assertEquals(true, (bool) 10);

        // Negative integers
        // (bool) -1 == true
        $this->assertEquals(true, (bool) -1);
        // (bool) -10 == true
        $this->assertEquals(true, (bool) -10);
        // (bool) 0 == false
        $this->assertEquals(false, (bool) 0);

        // Strings
        // (bool) '' == false
        $this->assertEquals(false, (bool) '');
        // (bool) 'false' == true
        $this->assertEquals(true, (bool) 'false');
        // (bool) 'not empty string' == true
        $this->assertEquals(true, (bool) 'not empty string');

        // Arrays
        // (bool) [] == false
        $this->assertEquals(false, (bool) []);
        // (bool) [1, 2, 3]
        $this->assertEquals(true, (bool) [1, 2, 3]);

        // Null
        // (bool) null
        $this->assertEquals(false, (bool) null);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.arithmetic.php
     */
    public function testArithmeticOperators()
    {
        // Addition
        $this->assertEquals(3, 1 + 2);

        // Subtraction
        $this->assertEquals(1, 2 - 1);

        // Multiplication
        $this->assertEquals(6, 2 * 3);

        // Division
        $this->assertEquals(3,  27/9);

        // Modulo
        $this->assertEquals(3, 27 % 4);

        // Exponentiation
        // TODO to be implemented
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function testOperatorsPrecedence()
    {
        $a = 1;
        $b = 2;
        $a = $b += 3;

        $this->assertEquals(5, $a);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.type-juggling.php
     */
    public function testTypeJuggling()
    {
        $foo = '1';
        $this->assertIsString($foo);

        $foo *= 2;
        $this->assertIsInt($foo);

        $foo = $foo * 1.3;
        $this->assertIsFloat($foo);

        $foo = 5 * '10 Little Piggies';
        $this->assertIsInt($foo);

        $foo = 5 * '10 Small Pigs';
        $this->assertIsInt($foo);
    }
}