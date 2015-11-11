<?php

/*
 * Paxum plugin for PHP merchant library
 *
 * @link      https://github.com/hiqdev/omnipay-paxum
 * @package   omnipay-paxum
 * @license   MIT
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\Paxum\Message;

/**
 * Paxum Abstract Request.
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $zeroAmountAllowed = false;

    /**
     * Get the purse.
     *
     * @return string purse
     */
    public function getPurse()
    {
        return $this->getParameter('purse');
    }

    /**
     * Set the purse.
     *
     * @param string $purse purse
     *
     * @return self
     */
    public function setPurse($value)
    {
        return $this->setParameter('purse', $value);
    }

    /**
     * Get the secret key.
     *
     * @return string secret key
     */
    public function getPassword()
    {
        return $this->getParameter('secretKey');
    }

    /**
     * Set the secret key.
     *
     * @param string $key secret key
     *
     * @return self
     */
    public function setPassword($value)
    {
        return $this->setParameter('secretKey', $value);
    }
}
