<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-plugin-identity for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-plugin-identity/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-plugin-identity/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mvc\Plugin\Identity\TestAsset;

use Laminas\Authentication\Adapter\AdapterInterface;
use Laminas\Authentication\Result;

class AuthenticationAdapter implements AdapterInterface
{
    protected $identity;

    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    public function authenticate()
    {
        return new Result(Result::SUCCESS, $this->identity);
    }
}
