<?php
namespace Mouf\Security\Password\Api;


use Mouf\Security\UserService\UserInterface;

interface ForgotYourPasswordService
{
    /**
     * Generates a token for user whose mail is $email, stores the token in database and returns the token.
     * Throws an EmailNotFoundException if the email is not part of the database.
     *
     * @param string $email
     * @return string
     *
     * @throws \Mouf\Security\Password\Api\EmailNotFoundException
     */
    public function generateToken(string $email) : string;

    /**
     * Returns a user based on its token.
     * Throws an TokenNotFoundException if the email is not part of the database.
     *
     * @param string $token
     * @return UserInterface
     *
     * @throws \Mouf\Security\Password\Api\TokenNotFoundException
     */
    public function getUserByToken(string $token) : UserInterface;

    /**
     * Discards a token.
     * Throws an TokenNotFoundException if the token is not part of the database.
     *
     * @param string $token
     *
     * @throws \Mouf\Security\Password\Api\TokenNotFoundException
     */
    public function discardToken(string $token);
}
