<?php
use Mouf\Security\Password\Exception;

class TokenNotFoundException implements \Mouf\Security\Password\Api\EmailNotFoundException
{
    public static function notFound(string $token)
    {
        return new self(sprintf('Could not find token "%s"', $token));
    }
}
