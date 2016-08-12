<?php

namespace Mouf\Security\Password\Api;

use Mouf\Security\UserService\UserInterface;

interface ForgotYourPasswordDao
{
    /**
     * Sets $token for user whose mail is $email, stores the token in database.
     * Throws an EmailNotFoundException if the email is not part of the database.
     *
     * @param string $email
     *
     * @throws \Mouf\Security\Password\Api\EmailNotFoundException
     */
    public function setToken(string $email, string $token);

    /**
     * Returns a user based on its token.
     * Throws an TokenNotFoundException if the token is not part of the database.
     *
     * @param string $token
     *
     * @return UserInterface
     *
     * @throws \Mouf\Security\Password\Api\TokenNotFoundException
     */
    public function getUserByToken($token);

    /**
     * Sets the password matching to $token and discards $token.
     * Throws an TokenNotFoundException if the token is not part of the database.
     *
     * @param string $token
     * @param string $password
     *
     * @throws \Mouf\Security\Password\Api\TokenNotFoundException
     */
    public function setPasswordAndDiscardToken(string $token, string $password);
}
