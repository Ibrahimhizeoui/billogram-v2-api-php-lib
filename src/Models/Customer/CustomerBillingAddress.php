<?php

namespace Billogram\Api\Models\Customers;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */


class CustomerBillingAddress
{
    /**
     * @var string
     */
    private $careOf;

    /**
     * @var bool
     */
    private $useCareOfAsAttention;

    /**
     * @var string
     */
    private $streetAddress;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * CustomerBillingAddress constructor.
     * @param string $careOf
     * @param bool $useCareOfAsAttention
     * @param string $streetAddress
     * @param string $zipCode
     * @param string $city
     * @param string $country
     */
    public function __construct(string $careOf, bool $useCareOfAsAttention, string $streetAddress, string $zipCode, string $city, string $country)
    {
        $this->careOf = $careOf;
        $this->useCareOfAsAttention = $useCareOfAsAttention;
        $this->streetAddress = $streetAddress;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCareOf()
    {
        return $this->careOf;
    }

    /**
     * @param string $careOf
     */
    public function setCareOf(string $careOf)
    {
        $this->careOf = $careOf;
    }

    /**
     * @return bool
     */
    public function isUseCareOfAsAttention()
    {
        return $this->useCareOfAsAttention;
    }

    /**
     * @param bool $useCareOfAsAttention
     */
    public function setUseCareOfAsAttention(bool $useCareOfAsAttention)
    {
        $this->useCareOfAsAttention = $useCareOfAsAttention;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     */
    public function setStreetAddress(string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}