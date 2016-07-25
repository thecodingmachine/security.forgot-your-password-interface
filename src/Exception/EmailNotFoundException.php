<?php

namespace Mouf\Security\Password\Exception;

class EmailNotFoundException extends \InvalidArgumentException implements \Mouf\Security\Password\Api\EmailNotFoundException
{
    public static function notFound(string $email)
    {
        return new self(sprintf('Could not find user whose email is "%s"', $email));
    }
}
