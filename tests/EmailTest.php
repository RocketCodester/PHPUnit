<?php
declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class EmailTest
 * @package App
 */
final class EmailTest extends TestCase
{
    /**
     * Tests the fromString method that the return type is an instance of the Email class for a valid email.
     * @throws \Exception
     * @return void
     * @see Email::fromString()
     */
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    /**
     * Tests the fromString method that an invalid argument exception is thrown for an invalid email.
     * @return void
     * @see Email::fromString()
     */
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    /**
     * Tests that the fromString method can be used as a string by using the __toString method.
     * @throws \Exception
     */
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
