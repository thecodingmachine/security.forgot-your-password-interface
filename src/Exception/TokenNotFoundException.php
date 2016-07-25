<?php

namespace Mouf\Security\Password\Exception;

class TokenNotFoundException extends \InvalidArgumentException implements \Mouf\Security\Password\Api\TokenNotFoundException
{
    public static function notFound(string $token)
    {
        return new self(sprintf('Could not find token "%s"', $token));
    }
}
