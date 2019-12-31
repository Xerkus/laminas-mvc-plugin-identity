<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-plugin-identity for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-plugin-identity/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-plugin-identity/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mvc\Plugin\Identity\TestAsset;

class IdentityObject
{
    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
    }

    /**
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = (string) $username;
    }

    /**
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
}
