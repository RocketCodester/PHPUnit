<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class Email
 * @package App
 */
final class Email
{
    /**
     * @var string
     */
    private $email;

    /**
     * Email constructor.
     * @param string $email
     */
    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    /**
     * Instantiates an email object from a string.
     * @param string $email
     * @return Email
     */
    public static function fromString(string $email): self
    {
        return new self($email);
    }

    /**
     * Returns the string representation of an email object.
     * @return string
     */
    public function __toString(): string
    {
        return $this->email;
    }

    /**
     * Ensures that an email address is valid.
     * @param string $email
     * @return void
     */
    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}
