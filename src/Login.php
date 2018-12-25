<?php
declare(strict_types=1);
/**
 * WebSecure - WebAuthInterface.
 * 
 * @author Nicholas English <https://github.com/iszorpal>.
 * @link <https://github.com/web-secure/web-auth-interface>.
 */

namespace WebSecure\Auth\Interface;

/**
 * The Login interface.
 */
interface Login
{

    /**
     * Initialize the login class.
     *
     * @param array $loginParams                   The login parameters.
     * @param \WebSecure\PasswordHashing\Interface The password hasher class.
     *
     * @return void.
     */
    public function __construct(array $loginParams = [], \WebSecure\PasswordHashing\Interface $passwordHashing);
}
