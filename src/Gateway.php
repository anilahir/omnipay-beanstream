<?php

namespace Omnipay\Beanstream;

use Omnipay\Common\AbstractGateway;

/**
 * Beanstream Gateway
 * @link https://dev.na.bambora.com/docs/guides/merchant_quickstart/calling_APIs
 */

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Beanstream';
    }

    public function getDefaultParameters()
    {
        return [
            'merchantId' => '',
            'profilePasscode' => '',
            'transactionPasscode' => ''
        ];
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getProfilePasscode()
    {
        return $this->getParameter('profilePasscode');
    }

    public function setProfilePasscode($value)
    {
        return $this->setParameter('profilePasscode', $value);
    }

    public function getTransactionPasscode()
    {
        return $this->getParameter('transactionPasscode');
    }

    public function setTransactionPasscode($value)
    {
        return $this->setParameter('transactionPasscode', $value);
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Beanstream\Message\CreateCardRequest', $parameters);
    }

    public function deleteCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Beanstream\Message\DeleteCardRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Beanstream\Message\PurchaseRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Beanstream\Message\RefundRequest', $parameters);
    }
}

