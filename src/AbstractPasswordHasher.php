<?php
declare(strict_types=1);
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace PasswordHasher;

/**
 * Abstract password hashing class
 */
abstract class AbstractPasswordHasher implements PasswordHasherInterface
{
    /**
     * Returns true if the password need to be rehashed, due to the password being
     * created with anything else than the passwords generated by this class.
     *
     * Returns true by default since the only implementation users should rely
     * on is the one provided by default in php 5.5+ or any compatible library
     *
     * @param string $password The password to verify
     * @return bool
     */
    public function needsRehash(string $password): bool
    {
        return password_needs_rehash($password, PASSWORD_DEFAULT);
    }
}
